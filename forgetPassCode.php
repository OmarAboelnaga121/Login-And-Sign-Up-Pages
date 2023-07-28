
<?php 
include 'forgetPassCodeBackend.php';

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
            <h3 class="text-center">The Code</h3>
            <h3 class="text-black mt-2 mb-2 m-3">Check Your Gmail</h3>
            <form method="post">
                <label>Enter The Code</label>
                <input type="text" class="" name="codeField" placeholder="Code" value="<?php if(isset($codeField)){echo $codeField;}?>">
                <?php if(isset($codeError)){
                    while ($codeError) {?>
                    
                        <div class="alert alert-danger mt-3" role="alert"><?php echo $codeError?></div>
                   <?php ;break;} }?>
                <div class="mainA">
                    <button type="submit" name="changePasswordBtn" class="theBtn text-center">Change Password</button>
                </div>
            </form>
        </div>
    </section>


</body>
</html>