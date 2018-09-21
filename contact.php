<!--CycleOut contact.php
    Date        Name            Description
    4/16/2018   Cindy Holley    original file
    8/31/2018   Cindy Holley    Week 2 project, connect newsletter/comment page to db Cycle
    9/04/2018   Cindy Holley    Add modification logs
    9/14/2018   Cindy Holley    Add admin page
    9/15/2018   Cindy Holley    Add view folder with head, header, nav, footer pages
-->

<!DOCTYPE html>

<?php include 'view/head.php'; ?>
<script src="js/validation_contact.js" type="text/javascript"></script>

<body>
    <div class="container">
        <!-- top section -->
        <div class="jumbotron">

            <!--header and navigation sections -->
            <?php include 'view/header.php'; ?>

            <div class="nav">
                <ul>
                    <li><a href="index.php"   class="btn btn-block"        role="button">Home</a></li>
                    <li><a href="events.php"  class="btn btn-block"        role="button">Events</a></li>
                    <li><a href="faq.php"     class="btn btn-block"        role="button">Cancer FAQs</a></li>
                    <li><a href="games.php"   class="btn btn-block"        role="button">Games</a></li>	
                    <li><a href="contact.php" class="btn btn-block active" role="button">Contact Us</a></li>
                </ul> 
            </div>	

        </div> <!--end jumbotron-->

        <!-- main section -->
        <div class="well">
            <h2>Contact us</h2>

            <form id="contactus" name="contactus" method="post" action="thanks_contact.php">
                <div> <!-- first name -->
                    <label for="firstName" class="label">First Name: </label>
                    <input type="text" name="firstName" id="firstName" required>
                    <span>*</span>
                </div>

                <div> <!-- last name -->
                    <label for="lastName" class="label">Last Name: </label>
                    <input type="text" name="lastName" id="lastName" required>
                    <span>*</span>
                </div>

                <div> <!-- email address -->
                    <label for="email" class="label">E-mail Address: </label>
                    <input type="text" name="email" id="email" required>
                    <span>*</span>
                </div>

                <div> <!-- address -->
                    <label for="address" class="label">Address: </label>
                    <input type="text" name="address" id="address" size="36" required>
                    <span>*</span>
                </div>

                <div> <!-- city -->
                    <label for="city" class="label">City: </label>
                    <input type="text" name="city" id="city" size="36" required>
                    <span>*</span>
                </div>

                <div> <!-- state -->
                    <label for="state" class="label">State: </label>
                    <input type="text" name="state" id="state" size="36" required>
                    <span>*</span>
                </div>

                <div> <!-- zip -->
                    <label for="zip" class="label">Zip Code: </label>
                    <input type="text" name="zip"  id="zip" size="36" required>
                    <span>*</span>
                </div>  

                <div> <!-- comments -->
                    <label for="comments" class="label">Comments: </label>
                    <textarea name="comments" cols="37" rows="5" id="comments"></textarea>
                </div>

                <div> <!-- submit button -->
                    <input type="submit" id="contact_us" name="Submit" value="Submit" class="btn">
                </div> 
            </form>
        </div> <!-- end well -->

        <!-- footer section -->
        <?php include 'view/footer.php'; ?>
        
    </div> <!-- end container -->   
</body>
</html>
