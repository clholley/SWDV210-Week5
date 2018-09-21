<?php
    /*Name          Date        Description
    Cindy Holley    8/31/2018   Create page
    Cindy Holley    8/31/2018   Week 2 project, connect newsletter/comment page to db Cycle
    Cindy Holley    9/04/2018   Add modification logs
    */

    class Database {
        private static $dsn = 'mysql:host=localhost;dbname=cycle';
        private static $username = 'root'; 
        private static $password = 'pa$$w0rd';
        private static $db;

        private function __construct() {}

        public static function getDB () {
            if (!isset(self::$db)) {
                try {
                    self::$db = new PDO(self::$dsn, //these are private (lines 3-6) so use self::
                                         self::$username,
                                         self::$password);
                } catch (PDOException $e) {
                    $error_message = $e->getMessage();
                    echo $error_message;
                    //include('../errors/database_error.php'); 
                    exit();
                }
            }
            return self::$db; //returning an object where it was called, such as category_db.php line 4
        }
    }
    
    class Employee {
        private $empID;
        private $firstName;
        private $lastName;
        //private $emailAddress;

        public function __construct($empID, $firstName, $lastName) {
            $this->empID = $empID;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        public function getEmpID() {
            return $this->empID;
        }
        public function setEmpID($value) {
            $this->empID = $value;
        }

        public function getFirstName() {
            return $this->firstName;
        }
        public function setFirstName($value) {
            $this->firstName = $value;
        }

        public function getLastName() {
            return $this->lastName;
        }
        public function setLastName($value) {
            $this->lastName = $value;
        }
    }
    
    class EmployeeDB {
        public static function getEmployees(){
            $db = Database::getDB();
            $query = 'SELECT empID, firstName, lastName FROM employees
                      ORDER BY empID';
            $statement = $db->prepare ($query);
            $statement->execute();

            $employees = array();
            foreach ($statement as $row) {
                $employee = new Employee($row['empID'],
                                          $row['firstName'],
                                          $row['lastName'] );   
                $employees[] = $employee;   
            }
            return $employees;
        }
    }
    $employees = EmployeeDB::getEmployees();
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cycle Out Cancer Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script src="js/email_list.js"></script> -->
    <link rel="stylesheet" href="css/cyclestyles.css">	
</head>

<body>
    <!-- top section -->
    <div class="jumbotron">
        <!--header and navigation sections -->
        <?php include 'view/headershort.php'; ?>

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

    <div>
        <h2>Employee LIst:   </h2>
            <ul>
                <!--display all employees -->           
                <?php foreach($employees as $employee) : ?>
                <li>
                    <?php echo $employee->getEmpID(); ?>
                    <?php echo $employee->getFirstName(); ?>
                    <?php echo $employee->getLastName(); ?>
                </li>
                <?php endforeach; ?>
            </ul>
 
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    
</body>
</html>

