
<?php 
include 'loginBackend.php';

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
            <h3 class="text-center">Login</h3>
            <form method="post">
                <?php if(isset($errors)){
                    while ($errors) {?>
                    
                        <div class="alert alert-danger mt-3" role="alert"><?php echo $errors?></div>
                   <?php ;break;} }?>
                <label>Enter Your User Name</label>
                <input type="text" class="" name="userName" placeholder="User Name">
                
                <label class="mt-3">Password</label>
                <div class="passDiv">
                    <input type="password" name="pass" id="passField" placeholder="Password"><br>
                    <button onclick="visable()" type="button" id="open"><i class="fa-solid fa-eye" style="color: #528df8;"></i></button>
                    <button onclick="notVisable()" type="button" id="close"><i class="fa-solid fa-eye-slash" style="color: #528df8;"></i></button>
                </div>
                <div class="d-flex justify-content-end forgetLink">
                <a href="forgetPass.php" class="text-center ">Forget My Password</a><br>
                </div>
                <div class="mainA">
                    <button type="submit" name="btn" class="theBtn text-center">Login</button>
                </div>
            </form>
            <p>Don't have Account</p>
            <div class="mainA">
                <a href="sign.php" class="text-center">Sign Up</a>
            </div>
        </div>
    </section>


    <script src="js/main.js"></script>

</body>
</html>