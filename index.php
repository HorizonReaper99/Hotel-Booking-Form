<?php
session_start();
?>
welcome.php
<html>

</html>

welcome02.php

<?php>
session_start()
?>

<?php
//WRITE TO DATABASE
if(isset($_post['submit'])){
    //CREATE SESSION VARIABLES FROM POSTED DATA
    $_SESSION['firstname'] = $_POST ['"']
    $_SESSION['surname'] = $_POST ['"']
    $_SESSION['hotelname'] = $_POST ['"']
    $_SESSION['indate'] = $_POST ['"']
    $_SESSION['outdate'] = $_POST ['"']

    //AMOUNT OF DAYS
    //ECHO TO VIEW AMOUNT OF DAYS FOR BOOKINGS
    $datetime1 = new DateTime($_SESSION['indate']);
    $datetime2 = new DateTime($_SESSION['outdate']);
    $interval = $datetime1->diff($datetime2);

    //DISPLAY BOOKING INFO FOR USER
        echo "<br> First Name : " . $_SESSION['firstname'] . "<br>" . "Surname : " . $_SESSION['surname'] . "<br>" . "Hotel Name: " . $_SESSION['hotelname'] . "<br>" . "Start Date : " $_SESSION['indate'] . "<br>" . $interval->format('%R%a days');


}
?>
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
welcome03.php
<href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<?php
    //check if the table hotel exists, if not create it
    require_once "connect.php";
    $sql = "CREATE TABLE bookings(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR (50), surname VARCHAR(50), hotelname VARCHAR(50), indate VARCHAR(30), outdate VARCHAR(30), booked INT(4))";

    $conn->query($sql);
    echo $conn->error;
?>

<form class="form-inline" role="form" action = <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>method = "post">
<label for="firstname">First Name:</label>
<input type="text" id="firstname" name="firstname" required>
<label for="start">Start date:</label>
<input type="date" id="start" name="indate" min="2018-01-01" max="2020-12-31">
<select name="hotelname" required>
    <option value="Hilton Kuwait Resort">Hilton Kuwait Resort</option>
</select>
<br><br>
<button type="submit" name="submit">Submit</button>
</form>

<?php
//WRITE TO DATABASE
if(isset($_post['submit'])){
    //CREATE SESSION VARIABLES FROM POSTED DATA
    $_SESSION['firstname'] = $_POST ['firstname']
    $_SESSION['surname'] = $_POST ['surname']
    $_SESSION['hotelname'] = $_POST ['hotelname']
    $_SESSION['indate'] = $_POST ['indate']
    $_SESSION['outdate'] = $_POST ['outdate']

    //AMOUNT OF DAYS
    //ECHO TO VIEW AMOUNT OF DAYS FOR BOOKINGS
    $datetime1 = new DateTime($_SESSION['indate']);
    $datetime2 = new DateTime($_SESSION['outdate']);
    $interval = $datetime1->diff($datetime2);
    //number of days booked
    $daysBooked = $interval->format('%R%a');
    //placeholder for cost of booking
    $value;

    //switch to adjust cost for different hotel rates
    switch($_POST['hotelname']){
        case "Hilton Kuwait Resort" :
        $value = daysBooked * 3313;
        break;
        case "Hilton Kuwait Resort" :
        $value = daysBooked * 3313;
        break;
        case "Hilton Kuwait Resort" :
        $value = daysBooked * 3313;
        break;
        case "Hilton Kuwait Resort" :
        $value = daysBooked * 3313;
        break;
        case "Hilton Kuwait Resort" :
        $value = daysBooked * 3313;
        break;
        default :
        echo "invalid booking";
    }

    //DISPLAY BOOKING INFO FOR USER
    echo "<br> First Name : " . $_SESSION['firstname'] . "<br>" . "Surname : " . $_SESSION['surname'] . "<br>" . "Hotel Name: " . $_SESSION['hotelname'] . "<br>" . "Start Date : " $_SESSION['indate'] . "<br>" . $interval->format('%R%a days');
    
    echo "<form class='form-incline' role='form' action=" . htmlscpecialchars($_SERVER["PHP_SELF"]) . " method='post'><input type='submit' name='confirm'></form>

    ?>