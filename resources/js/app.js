// collapsible profile starts here
let coll = document.getElementsByClassName("collapsible");
// let coll = document.querySelector("#collapsible");
for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        let content = this.nextElementSibling;
        if (content.style.display === "inline-block") {
            content.style.display = "none";
        } else {
            content.style.display = "inline-block";
        }
    });
}

// pop-up create-container starts here
let create = document.querySelector("#create");
let createContainer = document.querySelector(".create-recipe-container")
let closeBtn = document.querySelector(".close-btn")
create.onclick = function () {
    createContainer.style.display = "block"
};
closeBtn.onclick = function () {
    createContainer.style.display = "none"
};
window.onclick = function (e) {
    if (e.target === createContainer) {
        createContainer.style.display = "none"
    }
};


//sticky and smaller navbar on scroll
window.onscroll = function () {
    scrollSmaller();
};

let navbar = document.querySelector(".navbar");
let logo = document.querySelector(".logo");
let profile = document.querySelector(".profile");
let searchCont = document.querySelector(".search-container");
let welcome = document.querySelector(".welcome");
let content = document.querySelector('.content')
let sticky = navbar.offsetTop;


function scrollSmaller() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        profile.style.width = "50px";
        profile.style.padding = "20px 0 0 0";
        logo.style.width = "70px";
        logo.style.padding = "0 20px";
        welcome.style.display = "none";
        content.style.top = "96px";

    } else {
        profile.style.width = "70px";
        profile.style.padding = "20px";
        logo.style.width = "100px";
        logo.style.padding = "20px";
        searchCont.style.width = "400px";
        welcome.style.margin = "-15px";
        welcome.style.display = "block";
        content.style.top = "125px";
    }
}


/*hide password starts here */
// TODO: render account password in asteriks
// let pswd = document.querySelector(".hide-password");
// pswd.onclick = function() {
//     if (pswd.color === "password") {
//         pswd.type = "text";
//     } else {
//         pswd.type = "password";
//     }

    // {{ Auth::user()->password }}.str.replace(/./g, '*');

// }
