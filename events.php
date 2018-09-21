<!--CycleOut events.php
    Date        Name            Description
    4/16/2018   Cindy Holley    original file
    9/04/2018   Cindy Holley    Add modification logs
    9/14/2018   Cindy Holley    Add admin page
    9/15/2018   Cindy Holley    Add view folder with head, header, nav, footer pages
-->

<!DOCTYPE html>

<?php include 'view/head.php'; ?>
<script src="js/ticker_tape.js" type="text/javascript"></script>

<body onload = "init();">
    <div class="container">
	
        <!-- top section -->
        <div class="jumbotron">

            <!--header and navigation sections -->
            <?php include 'view/header.php'; ?>
            <div class="nav">
                <ul>
                    <li><a href="index.php"   class="btn btn-block"        role="button">Home</a></li>
                    <li><a href="events.php"  class="btn btn-block active" role="button">Events</a></li>
                    <li><a href="faq.php"     class="btn btn-block"        role="button">Cancer FAQs</a></li>
                    <li><a href="games.php"   class="btn btn-block"        role="button">Games</a></li>	
                    <li><a href="contact.php" class="btn btn-block"        role="button">Contact Us</a></li>
                </ul>
            </div>		
			
        </div> <!--end jumbotron-->

        <!-- main section -->	
        <div class="well">	
            <div>
                <h2>Monthly Rides</h2>

                <div class="desktop">
                        <p id = "original">
                        <img src="images/vintage-motorcycle3.jpg" alt="Vintage Motorcycle">	
                        </p><br><br><br><br>
                </div>

                <p>First Friday of the Month - May - June - July - Aug - September</p>

                <p>The first Friday of these months we honor past members who have had cancer but are no longer with us. Our route may include a lunch at their favorite watering hole, a visit to their surviving spouse, or a visit to the cemetery to decorate their grave.</p>

                <p>Contact <a href="contact.php" class="btn btn-xs" role="button">Cycle Out Cancer</a> for more information on commemorative rides in your area.</p>
            </div>

            <div class="desktop">
                <img class="floatright" src="images/cycleriders.jpg" alt="Cycle Riders"> 
            </div> 			

            <div>
                <h2>Rider Safety</h2>

                <p>All riders must adhere to basic safety rules while on our rides:</p>
                <ol>
                        <li>Gear up:  Wear an approved helmet and protective clothing appropriate for the weather.</li>
                        <li>Maintain the big stuff: Check your tires, breaks, fluids, electronics, and frame before each ride.</li>
                        <li>Check the little stuff: Make sure your lights, blinkers, mirrors, and stands all work correctly.</li>
                        <li>Obey all traffic laws, lights, and signs.</li>
                        <li>Drive defensively and respectfully even when others do not.</li>
                </ol>
            </div>

            <div>
                <h2>Rides and Activities</h2>

                <p>Rides and activities are currently being planned for these hospitals in the coming year:</p>

                <ul>
                        <li>Dana-Farber/Brigham and Women's Cancer Center, Boston MA</li>
                        <li>Memorial Sloan Kettering Cancer Center, New York NY</li>
                        <li>Mayo Clinic, Rochester MN</li>
                        <li>University of Texas MD Anderson Cancer Center, Houston TX</li>
                </ul>	

                <p>Contact <a href="contact.php" class="btn btn-xs" role="button">Cycle Out Cancer</a> for up-to-date schedules.</p>		
            </div>

            <div>
                <h2>Slide Show</h2>
                <p>See pictures from a recent event.</p>
                <a href="event_fishing_trip.php" class="btn btn-sm" role="button">Slide Show</a>
            </div>
            
            
        </div> <!-- end well -->
        
        <!--footer section-->
        <?php include 'view/footer.php'; ?>
    </div><!--close the container--> 
</body>
</html>
	
