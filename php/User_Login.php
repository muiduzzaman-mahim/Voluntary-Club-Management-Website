<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Login</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/User_Login.css">

    <script src="../js/time.js"></script>
    <script src="../js/all_alerts.js"></script>
</head>


<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <div class="Member_login">
        <img src="../image/Member_login.jpg" alt="member-login" width="70%">
        <form action="User_Home.php">
            <br>
            <input type="text" name="Member_name" id="Member_name" placeholder="Enter Member ID" required>
            <br>
            <input type="password" name="Member_pass" id="Member_pass" placeholder="Enter Your Password" required>
            <br>
            <small onclick="Contact_With_Committee()"><a href="P_member.php" class="forget_password">Forgot Password?</a></small>
            <br>

            <input type="submit" name="Member_submit" id="Member_submit" value="Login" class="btn-danger">
            <a href="U_Reg_member.php"><input type="button"  value="Register as a New Member" class="btn-success" id="regi_new_member"></a>
            <br>
            <a href="P_Home.php"><input type="button"  value="Enter as a guest" class="btn-info" id="guest_mode"></a>
        </form>
    </div>
    
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