/* 	email_list.js
 *	9/14/2018	Cindy	Add admin page
 * 
 */

"use strict";
		
var $ = function(id) {
    return document.getElementById(id);
};

var logIn = function() {
    var userName = $("username").value;
    var passWord = $("password").value;
    var isValid = true;

    // validate the entries
    if (userName == "") {
    	$("username").nextElementSibling.firstChild.nodeValue 
    		= "User name required.";
          isValid = false;
    } else {
    	$("userName").nextElementSibling.firstChild.nodeValue = "";
    }
	
    if (passWord == "") {
    	$("password").nextElementSibling.firstChild.nodeValue = 
    		"Password required.";
    	isValid = false;
	} else {
    	$("passWord").nextElementSibling.firstChild.nodeValue = "";
    }	

    // submit the form if all entries are valid
    if (isValid) {
        $("login").submit();       
    }
};

window.onload = function() {
    $("login").onclick = logIn;
};
