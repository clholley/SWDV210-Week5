/* CycleOut navbutton.js 
    Date        Name            Description
    4/16/2018   Cindy Holley    original file
    9/15/2018   Cindy Holley    Add view folder with head, header, nav, footer pages
*/

//"use strict";
//
//
//// Add active class to the current button (highlight it)
//var header = document.getElementById("nav");
//var btns = header.getElementsByClassName("btn btn-block");
//
//for (var i = 0; i < btns.length; i++) {
//    btns[i].addEventListener("click", function() {
//        var current = document.getElementsByClassName("active");
//        current[0].className = current[0].className.replace(" active", "");
//        this.className += " active";
//  });
//}


//// Get the container element
//var btnContainer = document.getElementById("nav");
//
//// Get all buttons with class="btn" inside the container
//var btns = btnContainer.getElementsByClassName("btn btn-block");
//
//// Loop through the buttons and add the active class to the current/clicked button
//for (var i = 0; i < btns.length; i++) {
//  btns[i].addEventListener("click", function() {
//    var current = document.getElementsByClassName("active");
//
//    // If there's no active class
//    if (current.length > 0) { 
//      current[0].className = current[0].className.replace(" active", "");
//    }
//
//    // Add the active class to the current/clicked button
//    this.className += " active";
//  });
//}


//var url = "http://example.com/products.html".split("/"); //replace string with location.href
//var navLinks = document.getElementsByTagName("nav")[0].getElementsByTagName("a");
//     //naturally you could use something other than the <nav> element
//var i=0;
//var currentPage = url[url.length - 1];
//for(i;i<navLinks.length;i++){
//  var lb = navLinks[i].href.split("/");
//  if(lb[lb.length-1] == currentPage) {
//   navLinks[i].className = "current";
//
//  }
//  }