
window.addEventListener("load", loadLinks);
window.addEventListener("load", markSelected);

function loadLinks(){
    let frame = document.getElementById("navBar").contentDocument;
    let smallNav = frame.getElementById("small-navbar-button");
    let donate = frame.getElementById("donate-btn");
    smallNav.onclick = openNav;
    donate.onclick = () => window.open("https://l.instagram.com/?u=https%3A%2F%2Fwww.paypal.com%2Fdonate%3Fhosted_button_id%3DQT4ZRWJ5Z28T6&e=ATOFlPDQL-3Kna_8rBjvYfZnbBwRyPK2cw3dB91T81xS-wJ5icvBgxQ2pJSdt0lh9TNkdmUZ9_WM9j0oRqMdoLStvWhJSejqUKO-kQ&s=1")
    console.log(smallNav.onclick);
    let links = frame.getElementsByClassName("menuLink");
    for(let i = 0; i < links.length;i++) {
        console.log(links[i].id);
        links[i].onclick = function(){
            window.sessionStorage["select"] = this.id;
            window.location = this.dataset.href;
        }
    }
};

function markSelected(){
    let frame = document.getElementById("navBar").contentDocument;
    let cont = frame.getElementsByClassName("selected");
    if (cont.length > 0) cont[0].classList.remove("selected");
    frame.getElementById(window.sessionStorage.getItem("select")).classList.add("selected");
};

function openNav(){
    let frame = document.getElementById("navBar").contentDocument;
    let nav = frame.getElementById("large-navbar");
    let content = document.getElementsByClassName("content")[0];
    let curtain = document.getElementsByClassName("curtain")[0];
    curtain.style.backgroundColor="rgba(0, 0, 0, .8)"
    curtain.style.display="initial";
    content.style.transform="translate3d(-57vw, 0, 0)";
    document.getElementById("navBar").style.transform="translate3d(0, 0, 1px)";
    document.getElementById("navBar").style.height = "100vh";
    nav.getElementsByClassName("selected")[0].style.borderBottomWidth = "1vh";
    frame.getElementById("logo").style.display = "none";
    frame.getElementById("nav-control").style.marginRight = "60vw"
    frame.getElementsByTagName("body")[0].appendChild(nav);
    frame.getElementsByTagName("nav")[0].style.padding = "2vh 1vw";
    nav.style.display = "flex";
    nav.style.height = "100vh";
    nav.style.width = "60vw";
    nav.style.color = "white";
}



/*
function changeImg(id){
    if (screen.width >= 580) {
        loadImage(id, "images/violinesPorLaPaz.png");
        document.getElementById(id).src = "images/violinesPorLaPaz.png";
    } else {
        document.getElementById(id).src = "images/quienesNinosTitleMobile.png";
    }
}

function loadImage(elem, path){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            return true;
        }
        else return false;
    }
    xhttp.open("GET", path, false);
    xhttp.send();
    console.log(xhttp.responseURL);
    return xhttp.responseURL;
}

changeImg("quienesNinosImage");
window.addEventListener("resize", changeImg("quienesNinosImage"));
*/

/*
function calcNavOffset(){
    let childs = document.body.children;
    let navBar = childs[0];
    let firstSection = document.getElementById("main-name");

    for(let key in firstSection){
        console.log(`Key: ${key}. Value: ${firstSection[key]}`);
        if (key == "height") {
            console.log(`Key: ${key}. Value: ${firstSection.style[key]}`);
        }
    }


    firstSection.style.marginTop = "100px"
    console.log(navBar.offsetHeight);
    console.log(firstSection.style.marginTop);
    console.log(navBar.style.marginTop);

}

window.addEventListener("load", calcNavOffset);
*/



/*
function tmp() {
    let contact = document.getElementById("navBar");
    for (let key in contact) {
        console.log(`Key: ${key}. Value: ${contact[key]}`);
    }
}
*/

/*
    for (let key in windowcontact) {
        console.log(`Key: ${key}. Value: ${window.location[key]}`);
    }

 */


/*
frame = document.getElementById("navBar").contentDocument;
contact = frame.getElementById("contact");
for (let key in frame) {
    console.log(`Key: ${key}. Value: ${frame[key]}`)
}

 */

/*
    frame.getElementsByClassName("selected")[0].classList.remove("selected");

    let classes = frame.getElementsByClassName("selected");
classes[0].classList.remove("selected");
console.log(classes.length);
for(let key in classes){
    console.log(`Key: ${key}. Value: ${classes[key]}`)
}
contact.classList.add("selected");

function iframeRef( frameRef ) {
    return frameRef.contentWindow
        ? frameRef.contentWindow.document
        : frameRef.contentDocument
}
 */

