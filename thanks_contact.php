<!--thanks_contact.php
    Date        Name            Description
    4/16/2018   Cindy Holley    original file
    8/31/2018   Cindy Holley    Week 2 project, connect newsletter/comment page to db Cycle
    9/04/2018   Cindy Holley    Add modification logs

-->  

<script src="js/validation_contact.js" type="text/javascript"></script>
<?php

  
    $firstName = filter_input(INPUT_POST, 'firstName'); 
    $lastName = filter_input(INPUT_POST, 'lastName');
    $email = filter_input(INPUT_POST, 'email');
    $address = filter_input(INPUT_POST, 'address');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');      
    $zip = filter_input(INPUT_POST, 'zip');
    $comments = filter_input(INPUT_POST, 'comments');    
    
    //hard code the employee ID
    $empID = 1;
    
    //Troubleshooting echo statement
    //echo "Fields: ". $email_address1 . $email_address2 . $first_name;  
    
    // Validate inputs
    if ($firstName !==null || $lastName !== null || $email !== null || 
        $address !== null || $city !== null || $state !== null ||   
        $zip !== null) {
     
//        $error = "Invalid input data. Check all fields and try again.";
//        #include('error.php'); 
//        echo "Form Data Error: " . $error; 
//        exit();
//    } else {
        
        $dsn = 'mysql:host=localhost;dbname=cycle';
        $username = 'root';           
        $password = 'pa$$w0rd';
    };
    try {
        $db = new PDO($dsn, $username, $password);
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
    $query = 'INSERT INTO contacts
                 (firstName, lastName, email, address, city, state, zip, comments, empID ) 
              VALUES
                 (:firstName, :lastName, :email, :address, :city, :state, :zip, :comments, :empID)';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);     #$name where we saved data from form, bind it to php variable
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':zip', $zip);
    $statement->bindValue(':comments', $comments);
    $statement->bindValue(':empID', $empID);
    $statement->execute();
    $statement->closeCursor();
    
    //Troubleshooting echo statements
    //echo "Fields: " . $firstName . $emailAddress; 
    //echo $firstName; 
    //echo $lastName;
    //echo $email;
    //echo $address;
    //echo $city;
    //echo $state;      
    //echo $zip;
    //echo $comments;
?>

<!doctype html>

<?php include 'view/head.php'; ?>
<link rel="stylesheet" href="css/cyclestyles.css">	

<body>
    <div class="container">
        <!-- top section -->
        <div class="jumbotron">
            <div class="header" id="top">
               <h1>Cycle Out Cancer</h1>      
               <h2>We Ride So Others May Live</h2> 
            </div> <!-- end class header -->

            <div class="nav">
                <ul>
                    <li><a href="index.php" class="btn btn-block active" role="button">Home</a></li>
                    <li><a href="events.php" class="btn btn-block" role="button">Events</a></li>
                    <li><a href="faq.php" class="btn btn-block" role="button">Cancer FAQs</a></li>
                    <li><a href="games.php" class="btn btn-block" role="button">Games</a></li>	
                    <li><a href="contact.php" class="btn btn-block" role="button">Contact Us</a></li>
                </ul>	
            </div> <!-- end class nav -->			
        </div> <!--end jumbotron-->

        <!-- main section -->	
        <div class="well">
            <div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <h3>Thank you, <?php echo $firstName; ?>, for contacting me! I will get back to you shortly.</h3>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>The following registration information has been successfully
               submitted.</p>
                <ul>
                    <li>First Name: <?php echo htmlspecialchars($firstName); ?></li>
                    <li>Last Name: <?php echo htmlspecialchars($lastName); ?></li>
                    <li>Email Address: <?php echo htmlspecialchars($email); ?></li>
                    <li>Address: <?php echo htmlspecialchars($address); ?></li>
                    <li>City: <?php echo htmlspecialchars($city); ?></li>
                    <li>State: <?php echo htmlspecialchars($state); ?></li>
                    <li>Zip Code: <?php echo htmlspecialchars($zip); ?></li>
                    <li>Comments: <?php echo htmlspecialchars($comments); ?></li>
                </ul>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
        </div> <!--end well-->    
        
        <!--footer section-->
        <?php include 'view/footer.php'; ?>
        
    </div><!--close the container--> 
</body>
</html>