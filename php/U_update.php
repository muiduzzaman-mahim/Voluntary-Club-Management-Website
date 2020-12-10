<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/User_regi.css">

    <script src="../js/time.js"></script>
</head>


<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <div class="contain">
        <div class="navbar">
            <a href="User_Home.html"> <button class="btn-outline-info">Home</button></a>
            <a href="U_member.html"> <button class="btn-outline-danger">Members</button></a>
            <a href="U_event.html"><button class="btn-outline-success">Events</button></a>
            <a href="U_activity.html"> <button class="btn-outline-info">Our
                    Activities</button></a>
            <a href="U_about.html"><button class="btn-outline-dark">About Us</button></a>
            <a href="U_update.html"><button class="btn-outline-primary
                        active">Update Profile</button></a>
            <a href="User_Login.html"><button class="btn-danger">Log Out</button></a>
        </div>
    </div>
    <hr>

    <!--Update profile-->
    <div class="Member_login">
        <form action="#">
            <br>
            <input type="text" placeholder="Student ID" name="idno" required><br />

            <input type="text" placeholder="Your Full name" name="name" required><br />

            <input type="text" placeholder="Contact Number" name="contact" required><br />

            <input type="email" placeholder="Email Address" name="email" required><br />

            <input type="password" placeholder="Password" name="password" required><br />

            <input type="submit" name="Member_submit" id="Member_submit" value="Update" class="btn-danger"><br>
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