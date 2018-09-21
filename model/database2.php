<?php

/* database2.php
 * This file is used by admin_view2.php
 * Date         Username        Description
 * 9/14/2018    Cindy Holley    Create admin page, db and visitor php pages
 * 
 */



    $dsn = 'mysql:host=localhost;dbname=cycle';
    $username = 'root';            #using root because we have not added a user yet
    $password = 'pa$$w0rd';

    try {
        $db = new PDO($dsn, $username, $password);
        //echo "You are in the try clause";
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        /* include('database_error.php'); */
        echo "DB Error: " . $error_message;  //if we catch an error, echo it out
        exit();
    }
?>
    