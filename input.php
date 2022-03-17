<?php
	include 'connect.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DGIN 5201 Project</title>
        <meta name="description" content="Brightspace modification">
        <meta name="author" content="Team Awesome">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- icon from google etc -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >


        <!-- bootstrap features -->
        <script src="js/jquery/2.0.0/jquery.min.js"></script>
        <link href="css/bootstrap/3.3.6/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap/3.3.6/bootstrap.min.js"></script>


    </head>
    <body>
    <header class="header">
            <a href="index.html"><img class="dal" src="pic/Dal.jpg" alt="Dalhousie Icon"></a>
            <div class="icon">
                <p class="sname"><strong>Student Name</strong></p>
                <p class="initial">YY</p>
                <i class="material-icons">more_vert</i>
                <i class="glyphicon glyphicon-bell"></i>
                <!-- <i class="fa fa-bell" style="font-size:24px"></i> -->
                <i class="material-icons">chat</i>
                <i class="material-icons">email</i>
                <i class="material-icons">more_vert</i>
                <i class="glyphicon glyphicon-th"></i>
            </div>
        </header>
        <nav class="nav">
            <ul>
                <li><a href="index.html"><strong>HOME</strong></a></li>
                <li><a href="https://www.dal.ca/campus_life/academic-support/advising.html"><strong>ACADEMIC SUPPORT</strong></a></li>
                <li><a href="https://dal.brightspace.com/d2l/lp/navbars/6606/customlinks/external/5052"><strong>SLEQ</strong></a></li>
                <li><a href="https://libraries.dal.ca/services/copyright-office/for-faculty/brightspace-for-faculty.html"><strong>COPY RIGHT</strong></a></li>
                <li><a href="https://dal.brightspace.com/d2l/ep/6606/dashboard/index"><strong>ePORTFOLIO</strong></a></li>
                <li><a href="https://libraries.dal.ca/"><strong>LIBRARIES</strong></a></li>
                <li><a href="https://dal.ca.campuspack.net/Groups/Instructional_Technology_Resources_for_Students"><strong>HELP</strong></a></li>                                                            
            </ul>
        </nav> 
        <h2>Assignment Page</h2>
        <form action="validation.php" method="post">
            <label>Course Name: </label><br>
            <select name = "cname" id="cname">
            <option value="DGIN 5201">DGIN 5201</option>
            <option value="CSCI 6505">CSCI 6505</option>
            <option value="STAT 5620">STAT 5620</option>          
            </select><br>
            <label>Assignment number: </label><br>
            <input type="number" id="anum" name="anum" value=""><br>
            <label>Due Date: </label><br>
            <input type="date" id="due" name="due"><br>
            <label>Instructions: </label><br>
            <textarea id="ins" name="ins" rows="5" cols="30"></textarea><br><br>
            <input type="submit" value="Submit">

        </form>
    </body>
    <footer>

    </footer>
</html>
