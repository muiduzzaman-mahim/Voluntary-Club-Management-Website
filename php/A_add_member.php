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
</head>


<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <div class="contain" style="background-color: rgba(255, 0, 0, 0.548); border-radius: 0 0 20px 20px;">
        <div class="navbar">
            <a href="Admin_Home.php"> <button class="btn-outline-info">Admin Home</button></a>
            <a href="A_Member_List.php"> <button class="btn-outline-danger active"> Members</button></a>
            <a href="A_Add_Event.php"><button class="btn-outline-success">Add Events</button></a>
            <a href="A_Search.php"> <button class="btn-outline-info">Search</button></a>
            <a href="A_Update.php"><button class="btn-outline-dark">Update</button></a>
            <a href="A_Delete.php"><button class="btn-outline-primary">Delete</button></a>
            <a href="Admin_Login.php"><button class="btn-danger">Log Out</button></a>
        </div>
    </div>

    <div class="Member_login">
        <img src="../image/register-login-add-on.png" alt="member-login" width="30%">
        <form action="User_Home.php">
            <br>
            <input type="text" placeholder="Student ID/Employee ID" name="idno" required><br />
            <small><b>*Student ID/Employee ID will be your Member ID*</b></small><br><br>

            <input type="text" placeholder="New Member Full name" name="name" required><br />

            <input type="text" placeholder="Contact Number" name="contact" required><br />

            <input type="email" placeholder="Email Address" name="email" required><br />

            <input type="password" placeholder="Password" name="password" required><br />

            <input type="password" placeholder="Confirm Password" name="password" required><br />

            <input type="submit" name="Member_submit" id="Member_submit" value="ADD" class="btn-danger"><br>

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