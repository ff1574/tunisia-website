/* 
    Franko Fister
    ISTE240 Sec800 Individual 1
    13.03.2023.
*/

//function that checks if div is halfway in frame, and then slides it from the edge of the site
function checkDivInFrame() {
    //select all listing/article divs on the site
    const containerDivs = document.querySelectorAll(".container-div");
    //for each of them
    containerDivs.forEach(div => {
        //calculate how far the user scrolled, the size of the div and when user scrolls past half the div
        const slideInAt = (window.scrollY + window.innerHeight) - div.offsetHeight / 2;
        const divBottom = div.offsetTop + div.offsetHeight;
        const isHalfShown = slideInAt > div.offsetTop;
        const isNotScrolledPast = window.scrollY < divBottom;
        //make it slide from out of frame to in frame
        if(isHalfShown && isNotScrolledPast) {
            div.classList.add("slide");
        }
    });
}

//function that hides the text and title of article when user hovers over picture so it could be seen fully
function hidetext(){
    var titleTextDiv = this.nextElementSibling;
    if(titleTextDiv && window.innerWidth > 1250) titleTextDiv.style.opacity = "0";
}

//function that shows the text and title of article when user stops hovering over picture so it could be read
function showtext(){
    var titleTextDiv = this.nextElementSibling;
    if(titleTextDiv && window.innerWidth > 1250) titleTextDiv.style.opacity = "1";
}

//when the site is fully loaded
document.addEventListener("DOMContentLoaded", () => {

    //get the path and name of site
    var pathHTML = window.location.pathname;
    var pageName = pathHTML.split("/").pop();

    console.log(pageName);

    //if page is not index, grading or references (this is here because script breaks when it tries to slide a non existant .container-div)
    if(!(pageName === "index.php" || pageName === "grading.php" || pageName === "references.php")) {
        //slide the first div instantly
        const firstDivAnimated = document.querySelectorAll(".container-div")[0];
        firstDivAnimated.classList.add("slide");
    
        //if it is a smaller viewport, slide first two instantly because two can be seen without scrolling
        if(window.innerWidth < 1250) {
            const secondDivAnimated = document.querySelectorAll(".container-div")[1];
            secondDivAnimated.classList.add("slide");
        }
    }

    //everytime user scrolls or resizes window, check if there is a need to slide elements
    window.addEventListener("scroll", checkDivInFrame);
    window.addEventListener("resize", checkDivInFrame);

    //get hamburger bar and navbar links
    const toggleNavbar = document.querySelector(".toggle-navbar");
    const navbarLinks = document.getElementsByClassName("links")[0];

    //when hamburger is clicked
    toggleNavbar.addEventListener('click', () => {

        //animate it and toggle the list of links to show
        toggleNavbar.classList.toggle("active");
        navbarLinks.classList.toggle("active");
    });

    //get all images
    var imgHistory = document.querySelectorAll(".img-content");

    //for each image, add a listener for when user hovers over it or removes hover from it
    imgHistory.forEach(function(img) {
        img.addEventListener("mouseover", hidetext.bind(img));
        img.addEventListener("mouseout", showtext.bind(img));
    });
});