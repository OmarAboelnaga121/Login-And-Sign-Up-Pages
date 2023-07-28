<?php 
include 'signBackend.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Document</title>

</head>
<body>
    <section class="login">
        <div class="main">
            <form method="post">
                <h3 class="text-center">Sign Up</h3>

                <label class="mt-3">Write Your User Name</label>
                <input type="text"  name="userName" placeholder="User Name" value="<?php if(isset($user)){echo $user;}?>">
                <?php if(isset($userError)){
                    while ($userError) {?>
                    
                        <div class="alert alert-danger mt-3" role="alert"><?php echo $userError?></div>
                   <?php ;break;} }?>

                
                <label class="mt-3">Write Your mail</label>
                <input type="email"  name="mail" placeholder="name@example.com" value="<?php if(isset($mail)){echo $mail;}?>">
                <?php if(isset($mailError)){
                    while ($mailError) {?>
                    
                        <div class="alert alert-danger mt-3" role="alert"><?php echo $mailError?></div>
                <?php ;break;} }?>

                
                <label class="mt-3">Write Your password</label>
                <div class="passDiv">
                    <input type="password"  name="pass" placeholder="Password" id="passField" value="<?php if(isset($passField)){echo $passField;}?>">
                    <button onclick="visable()" type="button" id="open"><i class="fa-solid fa-eye" style="color: #528df8;"></i></button>
                    <button onclick="notVisable()" type="button" id="close"><i class="fa-solid fa-eye-slash" style="color: #528df8;"></i></button>
                </div>
                <?php if(isset($passError)){
                    while ($passError) {?>
                    
                        <div class="alert alert-danger mt-3" role="alert"><?php echo $passError?></div>
                <?php ;break;} }?>

                <label class="mt-3">Rewrite Your password</label>
                <div class="passDiv">
                    <input type="password" class="visablePassInput" id="cPassField" name="CPass" placeholder="Password" value="<?php if(isset($CPassField)){echo $CPassField;}?>">
                    <button onclick="CpassVisable()" type="button" id="cOpen"><i class="fa-solid fa-eye" style="color: #528df8;"></i></button>
                    <button onclick="CpassNotVisable()" type="button" id="cPassClose"><i class="fa-solid fa-eye-slash" style="color: #528df8;"></i></button>

                </div>
                <?php if(isset($CPassError)){
                    while ($CPassError) {?>
                        <div class="alert alert-danger mt-3" role="alert"><?php echo $CPassError?></div>
                <?php ;break;} }?>

<!--
                <?php if(isset($recaptchaError)){
                    while ($recaptchaError) {?>
                        <div class="alert alert-danger mt-3" role="alert"><?php echo $recaptchaError?></div>
                <?php ;break;} }?>
                    -->

                <div class="text-center">
                    <button class="theBtn" name="submit" type="submit">Make My Account</button>
                </div>
                <p>Already have Account</p>
                <div class="mainA">
                    <a href="index.php" class="text-center">Log In</a>
                </div>
            </form>

        </div>
    </section>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>

    <script src="js/main.js"></script>
</body>
</html>


<!---
Web:
6LcPalsnAAAAAHMgrldkvgHnLFs6iyGxJJ9l0ys4

Localhost:
6LdPqFgnAAAAAI_5cN-1gfxGRbVu22dckVSr-dDZ-->