<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Registration</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/User_regi.css">

    <script src="../js/time.js"></script>
    <script src="../js/all_alert.js"></script>
</head>


<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <!--Database connection-->
    <?php
    //connect with database configuration
    require("config.php");
    $sql = mysqli_connect($host, $user, $pass, $db) or die("Cannot connect server." . mysqli_error($sql));

    //variable Declaration 
    $ID = $_POST["idno"];
    $Name = $_POST["name"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "select * from registration where ID = '$id'";
    $query_run = mysqli_query($sql, $query);

    //same id check 
    if (mysqli_num_rows($query_run) == 1) {
        echo "<h1>Member ID already exist</h1><br/><br/>";
    } else {
        $registration = "INSERT INTO registration values('$ID','$Name','$contact','$email','$password')";
        $result = mysqli_query($sql, $registration) or die("Error in inserting Data");

        if ($result) {
            echo "<h1>Successfully Registration.</h1><br/><br/>";
        } else {
            echo "<h1>Error in Registration process...</h1><br/><br/>";
        }
    }
    ?>

    <a href="User_Login.php"><input type="button" value=" Login Here using your ID and password " class="btn-success" id="login_back"></a>

    <!--Footer-->
    <div class="full-footer">
        <div class="foot">
            &copyDIU-Voluntary Club. All Rights are reserved 2020
        </div>
        <div class="info">
            Designed By <a href="https://muiduzzaman-mahim.github.io/Portfolio" target="_blank">Muiduzzaman Mahim</a>
        </div>
    </div>
</body>

</html>