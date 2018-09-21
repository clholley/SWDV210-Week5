<!--admin_view2.php
    Date        Name            Description
    4/16/2018   Cindy Holley    original file
    8/31/2018   Cindy Holley    Week 2 project, connect newsletter/comment page to db Cycle
    9/04/2018   Cindy Holley    Add modification logs
    9/14/2018   Cindy Holley    Add admin, db, visitor php pages
-->

<?php

    require "./model/database2.php";
    require "./model/visitor2.php";

    $action = filter_input(INPUT_POST, 'action');
        if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'list_visitors';
        }
    } 

    if ($action == 'list_visitors') {
        $empID = filter_input(INPUT_GET, 'empID', 
                FILTER_VALIDATE_INT);
        if ($empID == NULL || $empID == FALSE) {
            $empID = 1;
        }

        //Read from employee table   
        $query = 'SELECT * from employees
                    ORDER BY empID';
        $statement = $db->prepare($query);
        $statement->execute();
        $employees = $statement;
            
        //Read from contacts table   
        $query2 = 'SELECT * from contacts
                  WHERE empID = :empID
                  ORDER BY empID';
        $statement2 = $db->prepare($query2);
        $statement2->bindValue(":empID", $empID);
        $statement2->execute();
        $contact = $statement2;
    }else if ($action == 'delete_contact') {
            //echo 'Starting delete visitor login';
            $userID = filter_input(INPUT_POST, 'userID', 
                FILTER_VALIDATE_INT); 
            //echo $userID;
            delVisitor($userID);
            header("Location: admin_view2.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cycle Out Cancer Contact Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="_js/jquery.min.js"></script>
    <script src="_js/jquery-ui.min.js"></script>	
    <link href="_js/jquery-ui.min.css" rel="stylesheet">
    <script src="js/validation_contact.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/cyclestyles.css">	
</head>

<body>
<div class="container">
    <!-- top section -->
    <div class="jumbotron">
        <div class="header" id="top">
            <!--<img src="images/cycleparade.jpg" alt="Cycle Riders" width="527" height="312">-->
            <h1>Cycle Out Cancer</h1>      
            <h2>We Ride So Others May Live</h2> 
        </div> <!-- end class header -->

        <div class="nav">
        <ul>
            <li><a href="index.php" class="btn btn-block" role="button">Home</a></li>
            <li><a href="events.php" class="btn btn-block" role="button">Events</a></li>
            <li><a href="faq.php" class="btn btn-block" role="button">Cancer FAQs</a></li>
            <li><a href="games.php" class="btn btn-block" role="button">Games</a></li>	
            <li><a href="contact.php" class="btn btn-block" role="button">Contact Us</a></li>
            <li><a href="admin2.php" class="btn btn-block active" role="button">Administrator</a></li>
        </ul>	
        </div> <!-- end class nav -->			
    </div> <!--end jumbotron-->

    <!-- main section -->
    <div class="well">
    <section>
        <h2>Visitor Information</h2>

        <?php foreach ($employees as $employee) : ?>
            <ul>
                <li>
                <a href="?empID=<?php echo $employee['empID']; ?>"> <!--build hyperlink/GET superglobal-->
                    <?php echo $employee['firstName']; ?>
                </a>
                </li>
            </ul>  
        <?php endforeach; ?>  

        <section>
            <!--display the comments from the contacts page -->
            <h2><?php echo $empID; ?></h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th class="right">Message</th>
                    <th>&nbsp;</th>
                </tr>

                <?php foreach ($contact as $contacts) : ?>
                    <tr>
                        <td><?php echo $contacts['firstName']; ?></td>
                        <td><?php echo $contacts['comments']; ?></td> 

                        <td><form action="admin_view2.php" method="post"
                                  id="delete_contact_form">
                            <input type="hidden" name="action"
                                   value="delete_contact">
                            <input type="hidden" name="userID"
                                   value="<?php echo $contacts['userID']; ?>">
                            <input type="hidden" name="empID"
                                   value="<?php echo $contacts['empID']; ?>">
                            <input type="submit" value="Delete">
                        </form></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </section>

    </div> <!-- end well -->

    <!-- footer section -->
    <div class="footer">						
         <!--footer section-->
        <?php include 'view/footer.php'; ?>
    </div><!--close the container--> 
</div> <!-- end container -->   
</body>
</html>

