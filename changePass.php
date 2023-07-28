
<?php 

include 'changePassBack.php';

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
    <section class="login">
        <div class="main">
            <h3 class="text-center">Change Password</h3>
            <form method="post">
                <label>Enter The new Password</label>

                <div class="passDiv">
                    <input type="password" class="" id="passField" name="passField" placeholder="Password">
                    <button onclick="visable()" type="button" id="open"><i class="fa-solid fa-eye" style="color: #528df8;"></i></button>
                    <button onclick="notVisable()" type="button" id="close"><i class="fa-solid fa-eye-slash" style="color: #528df8;"></i></button>
                </div>

                <?php if(isset($passError)){
                    while ($passError) {?>
                        <div class="alert alert-danger mt-3" role="alert"><?php echo $passError?></div>
                   <?php ;break;} }?>

                <label>Rewrite new Password</label>

                <div class="passDiv">
                    <input type="password" id="cPassField" name="cPassField" placeholder="Password">
                    <button onclick="CpassVisable()" type="button" id="cOpen"><i class="fa-solid fa-eye" style="color: #528df8;"></i></button>
                    <button onclick="CpassNotVisable()" type="button" id="cPassClose"><i class="fa-solid fa-eye-slash" style="color: #528df8;"></i></button>
                </div>
                <?php if(isset($passError)){
                    while ($passError) {?>
                        <div class="alert alert-danger mt-3" role="alert"><?php echo $passError?></div>
                   <?php ;break;} }?>

                <div class="mainA">
                    <button type="submit" name="passBtn" class="theBtn text-center">Change Password</button>
                </div>
            </form>
        </div>
    </section>

    <script src="js/main.js"></script>

</body>
</html>