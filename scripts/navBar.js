/*
 * This script manages the behaviour of the navigation bar, including the links, selected element, and opening and closing
 * of the side navbar in narrow windows.
 * Last modified: 26/01/2021
 */

window.addEventListener("load", loadLinks);
window.addEventListener("load", markSelected);
window.addEventListener("resize", changeNav);

/**
 * Initial functionality to load the links of each button from the navbar. This must be done in
 * order to retrieve the selected element from the session storage and apply the css class
 * corresponding to it.
 */
function loadLinks(){
    for(let key in document.body.children){
        console.log(`Key: ${key}. Value: ${document.body.children[key]}`);
    }
    document.getElementById("insta-footer").onclick = () => window.open("https://www.instagram.com/vfpmexico/");
    document.getElementById("fb-footer").onclick = () => window.open("https://www.facebook.com/vfpmexico");
    let smallNav = document.getElementById("small-navbar-button");
    let donate = document.getElementById("donate-btn");
    smallNav.addEventListener("click", toggleNav)
    donate.onclick = () => window.open("https://www.paypal.com/donate/?hosted_button_id=QT4ZRWJ5Z28T6")
};

/**
 * If a user has the window browser narrow so that the later navbar is shown, and then makes it wider, this function
 * manages the appropriate closing of the lateral navbar. This also works when someone uses a cellphone in portrait mode
 * and then changes to landscape. Executed every time the window is resized.
 */
function changeNav(){
    let status = document.getElementById("large-navbar").dataset.status;
    let content = document.getElementsByClassName("content")[0];
    if(status == "open" && window.innerWidth >= 990){
        document.getElementById("large-navbar").dataset.status = "closed";
        content.removeEventListener("click", closeNav)
        closeNav();
    }
}

/**
 * In narrow windows, the nav bar shrinks and in order to access the menu the user must click or tap in a button to open
 * a side navbar, as well as to close it. This function handles this by first checking if the navbar is open or closed
 * (this is stored as a dataset attribute in the html), and then executing either open or closing functions.
 */
function toggleNav(){
    let status = document.getElementById("large-navbar").dataset.status;
    let content = document.getElementsByClassName("content")[0];
    if(status == "open"){
        document.getElementById("large-navbar").dataset.status = "closed";
        content.removeEventListener("click", closeNav)
        closeNav();
    }
    else{
        document.getElementById("large-navbar").dataset.status = "open";
        content.addEventListener("click", closeNav);
        openNav();
    }
}

/**
 * This function removes the selected class from every link in the navbar and then assigns it to the element which was
 * just visited by checking the session storage.
 */
function markSelected(){
    let cont = document.getElementsByClassName("selected");
    if (cont.length > 0) cont[0].classList.remove("selected");
    document.getElementById(window.sessionStorage.getItem("select")).classList.add("selected");
};

/**
 * Function that mutates the DOM in order to open the side navigation bar. This was not straight forward given that the
 * navbar is actually in an iframe element.
 */
function openNav(){
    let nav = document.getElementById("large-navbar");
    let content = document.getElementsByClassName("content")[0];
    let curtain = document.getElementsByClassName("curtain")[0];
    curtain.style.backgroundColor="rgba(0, 0, 0, .8)"
    curtain.style.display="initial";
    content.style.transform="translate3d(-57vw, 0, 0)"; //Translate 3d is used to avoid the content being moved to the front.
    document.getElementById("navBar").style.height = "100vh";
    nav.getElementsByClassName("selected")[0].style.borderBottomWidth = "1vh";
    document.getElementById("logo").style.display = "none";
    document.getElementById("nav-control").style.marginRight = "60vw"
    document.getElementsByTagName("body")[0].appendChild(nav);
    nav.style.display = "flex";
    nav.style.height = "100vh";
    nav.style.width = "60vw";
}

/**
 * Function  that mutates the DOM in order to close the side navigation bar. This mainly involves removing inline styles
 * so that the css styles are used instead.
 */
function closeNav(){
    let nav = document.getElementById("large-navbar");
    let content = document.getElementsByClassName("content")[0];
    let curtain = document.getElementsByClassName("curtain")[0];
    curtain.style.display = "none";
    content.style.transform = "translate3d(0, 0, 0)";
    nav.style.height = "";
    nav.style.width= "";
    nav.style.display = "";
    document.getElementById("navBar").style.height = "";
    nav.getElementsByClassName("selected")[0].style.borderBottomWidth = "";
    document.getElementById("logo").style.display = "initial";
    document.getElementById("nav-control").style.marginRight = "0";
    document.getElementsByTagName("nav")[0].appendChild(nav);
    document.getElementsByTagName("nav")[0].style.padding = "";
}
