<?php
    /* visitor2.php
     * This file is used by admin_view2.php
     * Date         Username        Description
     * 9/14/2018    Cindy Holley    Create admin page, model folder with db and visitor php pages
     * 
     */

    //Delete user and comment from comments table 
    function delVisitor($userID) {
        global $db;  
        $query3 = 'DELETE from contacts
                  WHERE userID = :userID';
        $statement3 = $db->prepare($query3);
        $statement3->bindValue(":userID", $userID);
        $statement3->execute();
        $contact = $statement3;
    }    
?>