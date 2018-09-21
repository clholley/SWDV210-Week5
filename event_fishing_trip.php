<!--CycleOut event_fishing_trip.php    
    Date        Name            Description
    4/16/2018   Cindy Holley    original file
    9/04/2018   Cindy Holley    Add modification logs
    9/15/2018   Cindy Holley    Add view folder with head, header, nav, footer pages
-->

<!DOCTYPE html>
    
    <?php include 'view/head.php'; ?>
    <script src="js/slideshow.js" type="text/javascript"></script>
    <link href="css/cyclestyles.css" rel="stylesheet" type="text/css"/>
    
<body>
    <div class="container">
        <!-- top section -->
        <div class="jumbotron">
            <!--header and navigation sections -->
            <?php include 'view/headershort.php'; ?>
            
            <div class="nav">
                <ul>
                    <li><a href="events.php" class="btn btn-block" role="button">Return to Events</a></li>			
                </ul>	
            </div> <!-- end class nav -->				
        </div> <!--end jumbotron-->

        <!-- main section -->
        <div class="well">
            <div class="slide_show">
                <h1>Fishing Slide Show</h1>
                <ul id="image_list">
                    <li><a href="images/release.jpg" title="Catch and Release"></a></li>
                    <li><a href="images/deer.jpg" title="Deer at Play"></a></li>
                    <li><a href="images/hero.jpg" title="The Big One!"></a></li>
                    <li><a href="images/bison.jpg" title="Roaming Bison"></a></li>
                </ul>

                <p><img src="images/release.jpg" alt="Catch and Release" id="image"></p>
                <h3 id="caption">Catch and Release</h3>
            </div>
        </div> <!--end well-->	

        <!--footer section-->
        <?php include 'view/footer.php'; ?>
    </div><!--close the container--> 
</body>
</html>