var container = document.querySelector("#page233");
var Amatches = container.querySelectorAll("a")
var LImatches = container.querySelectorAll("li")
for(var a of Amatches){  a.classList.add("page-link")}
for(var b of LImatches){  b.classList.add("page-item")}
