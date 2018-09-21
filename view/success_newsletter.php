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
            <h3>Thank you, <?php echo $first_name; ?>, for contacting me! I will get back to you shortly.</h3>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                
                <p>The following registration information has been successfully
               submitted.</p>
                <ul>
                    <li>Email Address: <?php echo htmlspecialchars($email_address1); ?></li>
                    <li>First Name: <?php echo htmlspecialchars($first_name); ?></li>
                </ul>
                
                <p>&nbsp;</p>
                <p>&nbsp;</p> 
                <p>&nbsp;</p>
                <p>&nbsp;</p>                
            </div>
            
        </div> <!--end well-->    
        
        <!--footer section-->
        <?php include 'view/footer.php'; ?>
        
    </div><!--close the container--> 
</body>
</html>