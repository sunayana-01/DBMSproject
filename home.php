<?php session_start(); 


include_once 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./assets/favicon.ico">
    <title>Tutor.co</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="nav-items">
                <a href="index.php" class="brand">SMS</a href="index.php">
                <ul>
                    <li><a href='home.php'>Home</a></li>

                    <!-- Displaying routes depending upon the user session -->
                    <?php
                        if (isset($_SESSION['username'])):
                    ?>
                        <li><a href='dashboard.php'>Dashboard</a></li>
                        <li><a href='logout.php'>Log Out</a></li>
                    <?php else: ?>
                        <li><a href='signup.php'>Sign Up</a></li>
                        <li><a href='login.php'>Log In</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </header>

    <section class="header">
        <div class="container">
            <div class="info-box">
                <img id="asset" src="./assets/01.svg" alt="" />
            </div>
            <div id="data" class="info-box">
                <h1 class="hero-heading">Student Management System</h1>
                <div class="dash"></div>
                <p>A school management system can be defined as a platform designed to enable the efficient running of your institution through digitization and automation of various academic and administrative operations. The software will play the role of a school data management system and allow you complete jobs involving bulk data management flawlessly and quickly. Choose us to choose best outcome.</p>             
            </div>
        </div>
    </section>
</body>
</html>
 <?php include_once 'footer.php'; ?>