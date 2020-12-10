<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>

    <link rel="shortcut icon" href="../image/club_logo.png">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/center.css">
    <link rel="stylesheet" href="../css/member.css">

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

    <!--Committee Member List-->
    <a href="#sub_menu" id="Committee_Member_list">
        <br>
        <h2 class="topic">Committee Members</h2>
    </a>
    <br>
    <div id="Committee_Member">
        <!--Advisor Panel-->
        <div class="advisor">
            <h3>Advisor Panel of this Club</h3>

            <div style="margin: 1.5% 2.5% 1.5% 2.5%; overflow: hidden;">
                <div style="width: 40%; float: left;">
                    <img src="../image/ishak.jpg" alt="advisor">
                </div>
                <div style="width: 40%; float: left;">
                    <h1 style="margin-top:20%">Md. Ishak Miazi</h1>
                    <caption>Deputy Registrar, <br> Daffodil International Unversity, <br>Ashulia Campus </caption>
                </div>
            </div>

            <div style="margin: 1.5% 2.5% 1.5% 2.5%; overflow: hidden;">
                <div style="width: 40%; float: left;">
                    <h1 style="margin-top:20%">Mr. Kazi Md. Diljeb Kabir</h1>
                    <caption>
                        Senior Assistant Director, <br>
                        Daffodil International Unversity, <br>
                        Ashulia Campus<br>
                        Cell: 01713493104 <br>
                        Email: diljeb@daffodilvarsity.edu.bd <br>
                    </caption>
                </div>
                <div style="width: 40%; float: left;">
                    <img src="../image/diljeb.jpg" alt="advisor" width="100%">
                </div>
            </div>

            <div style="margin: 1.5% 2.5% 1.5% 2.5%; overflow: hidden;">

                <div style="width: 40%; float: left;">
                    <img src="../image/motiur.jpg" alt="advisor" width="100%">
                </div>
                <div style="width: 40%; float: left;">
                    <h1 style="margin-top:20%">Mr. S A M Matiur Rahman</h1>
                    <caption>
                        Associate Professor and Associate Head, <br>
                        Department of Software Engineering <br>
                        Daffodil International Unversity, <br>
                        Ashulia Campus<br>
                        Cell: +8801764619998 <br>
                        Email: matiur.swe@diu.edu.bd <br>
                    </caption>
                </div>
            </div>
        </div>


        <!--Conevener-->
        <div class="convener">
            <h3>Convener of this Club</h3>

            <div style="margin: 1.5% 2.5% 1.5% 2.5%; overflow: hidden;">
                <div style="width: 40%; float: left;">
                    <h1 style="margin-top:20%">Md. Manik Parvez</h1>
                    <caption>
                        Lecturer , <br>
                        Department of Textile Engineering <br>
                        Daffodil International Unversity, <br>
                        Ashulia Campus<br>
                        Cell: +8801753967316 <br>
                        Email: parvez.te@diu.edu.bd <br>
                    </caption>
                </div>
                <div style="width: 40%; float: left;">
                    <img src="../image/manik.jpg" alt="advisor" width="100%">
                </div>
            </div>
        </div>

        <div class="Member_list">
            <h3>Other Members List</h3>
            <table border="1">
                <tr>
                    <td>Name</td>
                    <td>Position</td>
                    <td>Email</td>
                    <td>Contact</td>
                </tr>
                <tr>
                    <td>Mahfuzur Rahman Mehedi</td>
                    <td>Founder President</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>Abu Kawser Tony</td>
                    <td>Founder General Secretary</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>Md Amzad Hossen</td>
                    <td>President</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>Monalisa</td>
                    <td>General Secretary</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
            </table>
        </div>
    </div>
    <hr>

    <!--Member List and student ID-->
    <div id="Member_list">
        <a href="#sub_menu">
            <h2 class="topic">Club Members</h2>
        </a>
        <br>
        <div class="Member_list table">
            <table border="1">
                <tr>
                    <td>Name</td>
                    <td>Student ID</td>
                    <td>Contact</td>
                    <td>Email</td>
                </tr>

            </table>
        </div>
        <a href="A_add_member.php"><button class="btn btn-danger" style="width: 25%; padding: 1.10%; margin-left: 37%;">Add New Member</button></a>
    </div>

    <hr>

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