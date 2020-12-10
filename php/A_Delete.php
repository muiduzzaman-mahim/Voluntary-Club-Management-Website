<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Delete</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/User_regi.css">

    <script src="../js/time.js"></script>
</head>


<body onload="display_ct()" class="body">
    <div id="ct"></div>

    <div class="contain" style="background-color:  rgba(255, 0, 0, 0.548); border-radius: 0 0 20px 20px;">
        <div class="navbar">
            <a href="Admin_Home.php"> <button class="btn-outline-info">Admin Home</button></a>
            <a href="A_Member_List.php"> <button class="btn-outline-danger"> Members</button></a>
            <a href="A_Add_Event.php"><button class="btn-outline-success">Add Events</button></a>
            <a href="A_Search.php"> <button class="btn-outline-info">Search</button></a>
            <a href="A_Update.php"><button class="btn-outline-dark">Update</button></a>
            <a href="A_Delete.php"><button class="btn-outline-primary active">Delete</button></a>
            <a href="Admin_Login.php"><button class="btn-danger">Log Out</button></a>
        </div>
    </div>

    <div style="width: 100%;float: left;">
        <div class="Member_login" style="width: 40%; float:left; margin: 10% 5% 1.0% 10%;">
            <form action="#">
                <br>
                <input type="text" placeholder="Search By Student ID" name="searchID" required>
                <input type="submit" class="btn btn-info" value="Search">
            </form>
        </div>

        <div class="Member_login" style="width: 30%; float: left; margin:  2% 10% 2% 5%;">
            <form action="#">
                <br>
                <input type="text" placeholder="Student ID" name="idno" required><br />

                <input type="text" placeholder="Your Full name" name="name" required><br />

                <input type="text" placeholder="Contact Number" name="contact" required><br />

                <input type="email" placeholder="Email Address" name="email" required><br />

                <input type="password" placeholder="Password" name="password" required><br />

                <input type="submit" class="btn btn-danger" value="Delete">

            </form>
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