function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function myDFunction() {
    var x = document.getElementById("mydropdown");
    if (x.className === "dropdown") {
        x.className += " account";
    } else {
        x.className = "dropdown";
    }
}