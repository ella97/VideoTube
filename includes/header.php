<?php require_once("includes/config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoTube</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


</head>
<body>
    <div id="page-container">
        <div id="head-container">
            <button class= "nav-show-hide">
                <img src="assets/images/icons/menu.png" alt="">
            </button>

            <a class = "logo-container" href="index.php">
                <img src="assets/images/icons/VideoTubeLogo.png" title ="logo" alt="site-logo">
            </a>
            <div class="search-bar-container">
                <form action="search.php" method="GET">
                    <input type="text" class="search-Bar" name="term" placeholder="Search">
                        <button class="search-button">
                            <img src="assets/images/icons/search.png" alt="">
                        </button>
                
                </form>
            </div>

            <div class="right-icons">
                <a href="upload.php">
                    <img class="upload" src="assets/images/icons/upload.png" alt="">
                </a>
                <a href="#">
                    <img class="upload" src="assets/images/profiles/default.png" alt="">
                </a>
            </div>

        </div>
        <div id="side-nav-container">
        
        </div>
        <div id="main-section-container">
            <div id="main-content-container">
