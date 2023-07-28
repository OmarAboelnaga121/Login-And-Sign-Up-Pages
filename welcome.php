<?php 
session_start();
$_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="welcome">
        <div class="wecomeMainHeading text-center">
            <h4 class=""></h4>Welcome <?php print($_SESSION["user"]); ?></h4>
            <button class="theBtn" onclick="logOut()">Log Out</button>
        </div>
    </section>


    <script src="js/main.js"></script>
</body>
</html>