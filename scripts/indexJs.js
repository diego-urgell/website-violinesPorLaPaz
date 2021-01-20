"use strict";

/*
function changeImg(id){
    if (screen.width >= 580) {
        loadImage(id, "images/quienesNinosTitle.png");
        document.getElementById(id).src = "images/quienesNinosTitle.png";
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
