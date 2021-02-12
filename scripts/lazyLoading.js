
window.addEventListener("load", arrangeLazyLoad);

function arrangeLazyLoad(){
    let options = {
        target: null,
        rootMargin: "100px",
        treshold: 0
    }

    let elements = document.getElementsByClassName("lazy");
    let observer = new IntersectionObserver( lazyCallback, options);

    for(let i = 0; i < elements.length; i++){
        observer.observe(elements[i]);
    }

}

function lazyCallback(entries, observer){
    for(let i = 0; i < entries.length; i++){
        if (entries[i].isIntersecting){
            loadImage(entries[i].target);
            observer.unobserve(entries[i].target);
        }
    }
}


function loadImage(elem){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            elem.src = this.responseURL;
        }
    }
    xhttp.open("GET", elem.dataset.src, false);
    xhttp.send();
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