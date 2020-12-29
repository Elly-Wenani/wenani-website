function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

// Drop down menu

function myDFunction() {
    var x = document.getElementById("mydropdown");
    if (x.className === "dropdown") {
        x.className += " account";
    } else {
        x.className = "dropdown";
    }
}

// Sticky header on scroll

window.onscroll = function() {
    myScollFunction()
};

var header = document.getElementById("myTopnav");
var sticky = header.offsetTop;

function myScollFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}