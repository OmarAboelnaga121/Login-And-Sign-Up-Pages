
<?php 
require_once 'connect.php';



if(isset($_POST['forgetBtn'])){
    
        $forgetMail = $_POST["forgetMail"];

        $sql = "SELECT * FROM loginn WHERE mail = '$forgetMail'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            require_once 'mail.php';
            $mail->setFrom('omaraboelnaga131@gmail.com', 'Omar Wael');
            $mail->addAddress($forgetMail);
            $verficationCode = $_SESSION["verficationCode"];
            
            $mail->Subject = 'The Verfication Code';
            $mail->Body = 'Hello,<br>

            Thank you for creating an account with us. To verify your email address and activate your account, please enter the following code in the app:
            
                <br><br><center style="color: red; font-weight:700">'.$verficationCode.'</center><br>
            
            This code will expire in 15 minutes. If you did not request this code, please ignore this email.
            <br>
            If you have any questions or issues, please contact us at omaraboelnaga121@gmail.com or [support phone number].
            <br>
            We hope you enjoy using our app.
            <br>
            Sincerely, Omar';

            if($mail->send()){
                header('Location: forgetPassCode.php');
            }
        }else if($count == 0){
            $mailError = 'The mail is not avalbal';
        }
}
    







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
            <h3 class="text-center">Forget Password</h3>
            <form method="post" >
                <label>Enter Your Mail</label>
                <input type="email" class="" name="forgetMail" placeholder="name@example.com">

                <?php if(isset($mailError)){
                    while ($mailError) {?>
                    
                        <div class="alert alert-danger mt-3" role="alert"><?php echo $mailError?></div>
                   <?php ;break;} }?>

                <div class="mainA">
                    <button type="submit" name="forgetBtn" class="theBtn text-center">Get Code</button>
                </div>
            </form>
        </div>
    </section>


</body>
</html>