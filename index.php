<!--CycleOut index.php    
    Date        Name            Description
    4/16/2018   Cindy Holley    original file
    8/31/2018   Cindy Holley    Week 2 project, connect newsletter/comment page to db Cycle
    9/04/2018   Cindy Holley    Add modification logs
    9/14/2018   Cindy Holley    Add admin page
    9/15/2018   Cindy Holley    Add view folder with head, header, nav, footer pages
-->

<!DOCTYPE html>

<?php include 'view/head.php'; ?>
<script src="js/email_list.js" type="text/javascript"></script>

<body>
    <div class="container">
        <!--top section -->
        <div class="jumbotron">
            <!--header and navigation sections -->
            <?php include 'view/header.php'; ?>
            
            <div class="nav">
                <ul>
                    <li><a href="index.php"   class="btn btn-block active" role="button">Home</a></li>
                    <li><a href="events.php"  class="btn btn-block"        role="button">Events</a></li>
                    <li><a href="faq.php"     class="btn btn-block"        role="button">Cancer FAQs</a></li>
                    <li><a href="games.php"   class="btn btn-block"        role="button">Games</a></li>	
                    <li><a href="contact.php" class="btn btn-block"        role="button">Contact Us</a></li>
                    <li><a href="admin2.php"  class="btn btn-block"        role="button">Admin</a></li>
                </ul>
            </div>				
        </div> <!--end jumbotron-->

        <!-- main section -->
        <div class="well">

            <h1>Welcome to Cycle Out Cancer!</h1>	
            <p>Cycle Out Cancer is a volunteer organization that promotes cancer awareness. It is one of the largest all-volunteer motorcycle clubs in the Midwest. Anyone who is a motorcycle enthusiast is welcome to join.</p>

            <div class="date">
                <h2>Today is a new day. Make it your best day.</h2>	
                <script src="js/date_ap.js"></script>	
            </div> <!--end class date-->
				
            <div> <!-- Murach, page 132 -->
                <h2>Please join our email list to receive our newsletter</h2>
                <form id="email_form" name="email_form" method="post" action="thanks_newsletter.php">
                    <label for="email_address1">Email Address:</label>
                    <input type="text" id="email_address1" name="email_address1" required>
                    <span>*</span><br>

                    <label for="email_address2">Re-enter Email Address:</label>
                    <input type="text" id="email_address2" name="email_address2" required>
                    <span>*</span><br>

                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" required>
                    <span>*</span><br>

                    <label>&nbsp;</label>              
                    <input type="submit" id="join_list" name="Submit" value="Submit" class="btn" >
                </form>   
            </div>	
					
            <div>
                <h2>About Us</h2>

                <div class="desktop">
                    <img class="floatright" src="images/cyclehigh5.jpg" alt="Cycle Riders" width="448" height="299"> 
                </div> 	

                <p>Cycle Out Cancer was founded by a group of three motorcycle enthusiasts from Kansas City who each found their lives interrupted by something else they unfortunately shared in common: cancer. Each made a vow to the other to fight their different forms of cancer to the best of their ability and some day, "ride again."</p>

                <p>After three years and countless medical procedures, their dream came true in May of 2000 when the threesome made their way from Kansas City to Branson, Missouri.  At every stop in the short journey the three friends shared their amazing stories of how they fought their cancers.  Over time, more and more people have joined their rides. Now, Cycle Out Cancer is one of the largest all-volunteer motorcycle clubs in the midwest.</p>

                <p>Anyone who is a motorcycle enthusiast is welcome to join. Many say that the best part of the ride are the inspiring stories shared by the members at the finish line.</p>
                <br>
            </div>	

            <div>
                <h2>Blood and Organ Donation</h2>
                <p>For information on donating blood </p>
                <a href="http://www.redcrossblood.org/donating-blood" target="_blank" class="btn btn-default" role="button">American Red Cross</a>

                <p>For information on donating organs </p>
                <a href="http://www.webmd.com/a-to-z-guides/organ-donation-facts" target="_blank" class="btn btn-default" role="button">WebMD</a>
            </div>
        </div> <!--end well-->	

        <!--footer section-->
        <?php include 'view/footer.php'; ?>
        
    </div><!--close the container--> 
</body>
</html>
	
