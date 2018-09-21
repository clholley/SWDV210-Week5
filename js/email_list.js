/* email_list.js  */
/* Murach, JS page 132, jQ page 238 */

"use strict";

//function tyAlert() {
//	alert("Thank you for joining our email list.");
//};

var $ = function(id) {
    return document.getElementById(id);
};

var joinList = function() {
    var emailAddress1 = $("email_address1").value;
    var emailAddress2 = $("email_address2").value;
    var firstName = $("first_name").value;
    var errorMessage = "";
    var isEmailValid = "";
    var isNameValid = "";

    // validate the entries
    if (emailAddress1 === "") {
    	$("email_address1").nextElementSibling.firstChild.nodeValue 
    		= "First email address required.";
          isValid = false;
    } else {
    	$("email_address1").nextElementSibling.firstChild.nodeValue = "";
        isEmailValid = true;
    }
	
    if (emailAddress2 === "") {
    	$("email_address2").nextElementSibling.firstChild.nodeValue 
                = "Second email address required.";
    	isEmailValid = false;
    } else if (emailAddress1 !== emailAddress2) {
    	$("email_address2").nextElementSibling.firstChild.nodeValue  
    		= "Email addresses must match.";
    	isEmailValid = false;     
    } else if (emailAddress2 === emailAddress1) {
    	$("email_address2").nextElementSibling.firstChild.nodeValue = "";
        isEmailValid = true;
    } 
	
    if (firstName === "") {
    	$("first_name").nextElementSibling.firstChild.nodeValue = 
    		"First name is required.";
    	isNameValid = false;
    } else {
    	$("first_name").nextElementSibling.firstChild.nodeValue = "";
        isNameValid = true;
    }

    // submit the form if all entries are valid
    if ((isEmailValid === true) && (isNameValid === true)) {
        $("email_form").submit();
//            return tyAlert();       
    }
};

window.onload = function() {
    $("join_list").onclick = joinList;
};
