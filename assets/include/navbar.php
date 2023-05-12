<?php $name ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Franko Fister -->
		<!--ISTE240 Individual 1 -->
        <!--13.03.2023.-->
	<meta charset=utf-8 />
	<!--Setting title of site, linking css and js scripts, importing all needed fonts-->
    <title>Individual 2</title>
	<script src="script.js"></script>
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
</head> 
<body>
    <!--Setting up the navbar, putting title of page, all links, and a hamburger bar-->
    <nav class="navbar">
        <div class="title"><?php echo $name ?></div>
        <a href="#" class="toggle-navbar">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="fauna.php">Fauna</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="culture.php">Culture</a></li>
                <li><a href="nature.php">Nature</a></li>
                <li><a href="tradition.php">Tradition</a></li>
                <li><a href="festivals.php">Festivals</a></li>
                <li><a href="towns.php">Towns</a></li>
                <li><a href="tourism.php">Tourism</a></li>
                <li><a href="coasts.php">Coasts</a></li>
            </ul>
        </div>
    </nav>