// document.getElementById("navMenu").innerHTML =
//     '<div class="navbar-header"> ' +
//     '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> ' +
//     '<span class="icon-bar"></span> ' +
//     '<span class="icon-bar"></span> ' +
//     '<span class="icon-bar"></span> ' +
//     '</button> ' +
//     '<a class="navbar-brand" href="index.html">Gautham Velchuru</a> ' +
//     '</div> ' +
//     '<div class="collapse navbar-collapse" id="myNavbar"> ' +
//     '<ul class="nav navbar-nav navbar-right"> ' +
//     '<li class="dropdown"> ' +
//     '<a class="dropdown-toggle" data-toggle="dropdown" href="projects.html">Years ' +
//     '<span class="caret"></span></a> ' +
//     '<ul class="main-nav"> ' +
//     '<li><a href="year1.html">Year 1</a></li> ' +
//     '<li><a href="year2.html">Year 2</a></li>' +
//     '</ul> ' +
//     '</li> ' +
//     // '<li><a href="http://www.gauthamvelchuru.weebly.com">UW Honors Portfolio</a></li> ' +
//     // '</ul> ' +
//     '</div> ';

let mainNav = document.getElementById("js-menu");
let navBarToggle = document.getElementById("js-navbar-toggle");

navBarToggle.addEventListener("click", function () {
    mainNav.classList.toggle("active");
});