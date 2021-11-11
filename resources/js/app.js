// collapsible profile starts here
let coll = document.getElementsByClassName("collapsible");
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
let logo = document.querySelector(".logo")
let profile = document.querySelector(".profile")
let searchCont = document.querySelector(".search-container")
let sticky = navbar.offsetTop;

function scrollSmaller() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        profile.style.width = "50px";
        profile.style.paddingTop = "0";
        profile.style.paddingBottom = "0";
        logo.style.width = "70px";
        logo.style.paddingTop = "0";
        logo.style.paddingBottom = "0";
        coll.style.margin = "0";
    } else {
        profile.style.width = "70px";
        profile.style.padding = "20px";
        logo.style.width = "100px";
        logo.style.padding = "20px";
        coll.style.padding = "18px";
        coll.style.margin = "0 100px";
        searchCont.style.width = "400px";
    }
}
