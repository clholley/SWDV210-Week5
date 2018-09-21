<!--admin2.php
    Date        Name            Description
    4/16/2018   Cindy Holley    original file
    8/31/2018   Cindy Holley    Week 2 project, connect newsletter/comment page to db Cycle
    9/04/2018   Cindy Holley    Add modification logs
    9/14/2018   Cindy Holley    Add admin, db, visitor php pages
-->

<!DOCTYPE html>

<?php include 'view/head.php'; ?>
<script src="js/admin.js" type="text/javascript"></script>
<link href="css/cyclestyles.css" rel="stylesheet" type="text/css"/>
   
<body>
    <div class="container">
        <!-- top section -->
        <div class="jumbotron">
            <!--header and navigation sections -->
            <?php include 'view/headershort.php'; ?>
            
            <div class="nav">
                <ul>
                    <li><a href="index.php"   class="btn btn-block"        role="button">Home</a></li>
                    <li><a href="events.php"  class="btn btn-block"        role="button">Events</a></li>
                    <li><a href="faq.php"     class="btn btn-block"        role="button">Cancer FAQs</a></li>
                    <li><a href="games.php"   class="btn btn-block"        role="button">Games</a></li>	
                    <li><a href="contact.php" class="btn btn-block"        role="button">Contact Us</a></li>
                    <li><a href="admin2.php"  class="btn btn-block active" role="button">Administrator</a></li>
                </ul>
            </div>		
				
        </div> <!--end jumbotron-->

        <!-- main section -->
        <div class="well">

            <h3><script src="js/date_ap.js"></script></h3>	

            <div>
                <h2>Please log in:</h2>
                <form id="login" name="login" method="post" action="admin_view2.php">
                    <label for="username">User Name: </label>
                    <input type="text" id="username" name="username" value="Cindy Lou Who"><br>

                    <label for="password">Password: </label>
                    <input type="text" id="password" name="password" value="*****"><br>

                    <label>&nbsp;</label>              
                    <input type="submit" id="submit" name="Submit" value="Submit" class="btn">
                </form>    
            </div>	
        </div>	

        <!--footer section-->
        <div class="footer">							
            <div class="copyright">
                <p>© 2018 Cycle Out Cancer <a href="#"><span class="glyphicon glyphicon-envelope"></span></a></p>
            </div> <!--end copyright-->

            <!-- button to go to top of header-->
            <div class="topbutton" >
                <a href="#top" class="btn btn-xs">Top of Page</a> 			
            </div> <!-- end class topbutton -->
        </div> <!--end class footer-->	
        </div> <!--end well-->
    </div><!--close the container--> 
</body>
</html>
	
