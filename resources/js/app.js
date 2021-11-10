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

// collapsible create-container starts here
let create = document.getElementById("create");
create.addEventListener("click", function () {
    alert("A modal box will replace this alert message")
});


// let account = document.getElementsByClassName("content-account")
// account.addEventListener("click", function () {
//
// })





// //TODO verify
// // https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_shrink_header_scroll
// // https://www.w3schools.com/howto/howto_js_sticky_header.asp
// //TODO link all JS
// //sticky and smaller navbar on scroll
// window.onscroll = function () {
//     scrollSmaller();
//     scrollSticky();
// };
//
// let navbar = document.getElementsByClassName("navbar");
// let sticky = navbar.offsetTop;
//
// function scrollSmaller() {
//     if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
//         navbar.style.fontSize = "30px";
//     } else {
//         navbar.style.fontSize = "90px";
//     }
// }
//
// function scrollSticky() {
//     if (window.pageYOffset > sticky) {
//         navbar.classList.add("sticky");
//     } else {
//         navbar.classList.remove("sticky");
//     }
// }
