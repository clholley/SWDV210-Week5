	

<!doctype html>

<?php include 'view/head.php'; ?>	
<?php include 'thanks_newsletter.php'; ?>
<link rel="stylesheet" href="css/cyclestyles.css">	

<body>
    <div class="container">
        <!--top section--> 
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
            </div>  <!--end class nav--> 				
        </div> <!--end jumbotron-->

        <!--main section--> 	
        <div class="well">
            <div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                
                //<?php echo "Form Data Error: " . $error; ?>
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                
                <p>There was an error. Please try again.</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <?php echo "DB Error: " . $error_message; ?>            
 
                <p>&nbsp;</p>
                <p>&nbsp;</p>  
                <p>&nbsp;</p>
                <p>&nbsp;</p>                
            </div>
            
        </div> <!--end well-->   
        
        <!--footer section-->
        <?php include 'view/footer.php'; ?>
        
    </div><!--close the container -->
</body>
</html>

