<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/User_Home.css">
    <script src="../js/time.js"></script>
    <script src="../js/all_alerts.js"></script>

</head>

<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <video src="../video/ac_v1.mp4" autoplay loop playsinline muted></video>

    <div class="contains">
        <div class="welcome">
            <a href="#main">
                <h2><img src="../video/down_arrow.gif" alt=""><b> Welcome to Our Official Website </b><img
                        src="../video/down_arrow.gif" alt=""></h2>
            </a>
        </div>
        <div id="main">
            <main>
                <div class="logo">
                    <a href="#">
                        <div class="logo">
                            <img src="../image/club_logo.png" alt="">
                        </div>
                    </a>
                </div>

                <div class="options">
                    <a href="P_member.php"> <button class="btn-danger">Member's Rule</button></a>
                    <a href="U_Reg_member.php" onclick="events()"><button class="btn-success">Events</button></a>
                    <a href="P_activity.php"> <button class="btn-info">Our Activities</button></a>
                    <a href="P_about.php"><button class="btn-dark">About Us</button></a>
                    <br>
                    <a href="U_Reg_member.php"><button class="btn-danger" style="width: 50%; padding: 3px;">Register as
                            a New
                            Member</button></a>
                </div>
            </main>
        </div>
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