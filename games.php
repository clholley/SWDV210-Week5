<!--CycleOut games.php
    Date        Name            Description
    4/16/2018   Cindy Holley    original file
    9/04/2018   Cindy Holley    Add modification logs
    9/14/2018   Cindy Holley    Add admin page
    9/15/2018   Cindy Holley    Add view folder with head, header, nav, footer pages
-->

<!DOCTYPE html>

<?php include 'view/head.php'; ?>
<script src="js/rainbow_toggle.js" type="text/javascript"></script>
<script src="js/trash_it.js" type="text/javascript"></script>

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
                    <li><a href="games.php"   class="btn btn-block active" role="button">Games</a></li>	
                    <li><a href="contact.php" class="btn btn-block"        role="button">Contact Us</a></li>
                </ul>
            </div>	
				
        </div> <!--end jumbotron-->

        <!-- main section -->
        <div class="well">
            <!--date widget  -->
            <div class="date">
                <h2>Today is a new day. Make it your best day.</h2>	
                <script src="js/date_ap.js"></script>	
            </div> <!--end class date-->

            <!--calculator -->
            <div class="calculator">
                <h1>Calculator</h1>
                <form name="calculator">
                <table>
                    <tr>
                        <td>
                        <input type="text" name="Input" Size="20"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input type="button" name="one" value=" 1 " OnClick="calculator.Input.value += '1'">
                        <input type="button" name="two" value=" 2 " OnClick="calculator.Input.value += '2'">
                        <input type="button" name="three" value=" 3 " OnClick="calculator.Input.value += '3'">
                        <input type="button" name="plus" value=" + " OnClick="calculator.Input.value += ' + '">
                        <br>
                        <input type="button" name="four" value=" 4 " OnClick="calculator.Input.value += '4'">
                        <input type="button" name="five" value=" 5 " OnClick="calculator.Input.value += '5'">
                        <input type="button" name="six" value=" 6 " OnClick="calculator.Input.value += '6'">
                        <input type="button" name="minus" value=" - " OnClick="calculator.Input.value += ' - '">
                        <br>
                        <input type="button" name="seven" value=" 7 " OnClick="calculator.Input.value += '7'">
                        <input type="button" name="eight" value=" 8 " OnClick="calculator.Input.value += '8'">
                        <input type="button" name="nine" value=" 9 " OnClick="calculator.Input.value += '9'">
                        <input type="button" name="times" value=" x " OnClick="calculator.Input.value += ' * '">
                        <br>
                        <input type="button" name="clear" value=" c " OnClick="calculator.Input.value = ''">
                        <input type="button" name="zero" value=" 0 " OnClick="calculator.Input.value += '0'">
                        <input type="button" name="DoIt" value=" = " OnClick="calculator.Input.value = eval(calculator.Input.value)">
                        <input type="button" name="div" value=" / " OnClick="calculator.Input.value += ' / '">
                        </td>
                    </tr>
                </table>
                </form>	
            </div> <!--end calculator -->

            <!-- fade in/out toggle widget, jQuery UI -->
            <div class="calculator">
                <h1>Rainbow Toggle</h1>
                <button>Click to fade in/out the rainbow</button><br><br>

                <div id="div1" style="width:100px;height:30px;background-color:red;"></div>
                <div id="div2" style="width:100px;height:30px;background-color:orange;"></div>
                <div id="div3" style="width:100px;height:30px;background-color:yellow;"></div>
                <div id="div4" style="width:100px;height:30px;background-color:green;"></div>
                <div id="div5" style="width:100px;height:30px;background-color:blue;"></div>
                <div id="div6" style="width:100px;height:30px;background-color:indigo;"></div>			
                <div id="div7" style="width:100px;height:30px;background-color:violet;"></div>
            </div>

            <!-- drag-and-drop widget, jQuery UI, TMM, page 420 -->
            <div class="calculator">
                <div><h1>Trash It!</h1></div>
                <div id="photos">
                    <img src="images/trash_it/slide1_h.jpg" alt="image lost">
                    <img src="images/trash_it/slide2_h.jpg" alt="image lost">
                    <img src="images/trash_it/slide3_h.jpg" alt="image lost">
                    <img src="images/trash_it/slide4_h.jpg" alt="image lost">
                    <img src="images/trash_it/slide5_h.jpg" alt="image lost">
                    <img src="images/trash_it/slide6_h.jpg" alt="image lost">
                </div>
                <img src="images/trash_it/trashcan-empty-icon.png" id="trashcan" alt="trashcan">
            </div>
            
        </div> <!--end well-->	

        <!--footer section-->
        <?php include 'view/footer.php'; ?>
    </div> <!--close the container--> 
</body>
</html>
