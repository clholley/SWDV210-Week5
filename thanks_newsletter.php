<!--thanks_newsletter.php
    Date        Name            Description
    4/16/2018   Cindy Holley    original file
    8/31/2018   Cindy Holley    Week 2 project, connect newsletter/comment page to db Cycle
    9/04/2018   Cindy Holley    Add modification logs

--> 

<?php
    $email_address1 = filter_input(INPUT_POST, 'email_address1');
    $email_address2 = filter_input(INPUT_POST, 'email_address2');
    $first_name = filter_input(INPUT_POST, 'first_name');
    //echo "Fields: ". $email_address1 . $email_address2 . $first_name;  
    
    // Validate inputs
    if ($email_address1 === $email_address2 && $first_name !== null) {
     
//        $error = "Invalid input data. Check all fields and try again.";
//        #include('error.php'); 
//        echo "Form Data Error: " . $error; 
//        exit();
//    } else {
        
        $dsn = 'mysql:host=localhost;dbname=cycle';
        $username = 'root';            #using root because we have not added a user yet
        $password = 'pa$$w0rd';
        //echo "You are here in the else clause";
    }
    try {
        $db = new PDO($dsn, $username, $password);
        //echo "You are in the try clause";
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        /* include('database_error.php'); */
        echo "<br>" . "<br>";
        echo "Database Error: " . $error_message;  //if we catch an error, echo it out
        echo "<br>" . "<br>";
        echo "Please click on the back arrow and try again.";
        exit();
    }

    // Add the product to the database  
    $query = 'INSERT INTO newsletter
                 (emailAddress, firstName)
              VALUES
                 (:email_address1, :first_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email_address1', $email_address1);     #$name where we saved data from form, bind it to php variable
    $statement->bindValue(':first_name', $first_name);
    $statement->execute();
    $statement->closeCursor();
    //echo "Fields: " . $email_address1 . $first_name; 
?>


<!doctype html>

<?php include 'view/head.php'; ?>	
<link rel="stylesheet" href="css/cyclestyles.css">	

<body>
    <div class="container">
        
        <div class="jumbotron">
            <?php include 'view/headershort.php'; ?>

            <div class="nav">
                <ul>
                <li><a href="index.php" class="btn btn-block active" role="button">Home</a></li>
                <li><a href="events.php" class="btn btn-block" role="button">Events</a></li>
                <li><a href="faq.php" class="btn btn-block" role="button">Cancer FAQs</a></li>
                <li><a href="games.php" class="btn btn-block" role="button">Games</a></li>	
                <li><a href="contact.php" class="btn btn-block" role="button">Contact Us</a></li>
                </ul>	
            </div>   				
        </div> 
	
        <div class="well">
            <div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <h3>Thank you, <?php echo $first_name; ?>, for contacting me! I will get back to you shortly.</h3>
                <p>&nbsp;</p>
                <p>&nbsp;</p>            
                
                <p>The following registration information has been successfully submitted.</p>
                <ul>
                    <li>Email Address: <?php echo htmlspecialchars($email_address1); ?></li>
                    <li>First Name: <?php echo htmlspecialchars($first_name); ?></li>
                </ul>
                
                <p>&nbsp;</p>
                <p>&nbsp;</p> 
                <p>&nbsp;</p>
                <p>&nbsp;</p>                
            </div>
        </div>   
        
        <?php include 'view/footer.php'; ?>
        
    </div> 
</body>
</html>

