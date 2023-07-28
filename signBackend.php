<?php 
    #Putting the connect File in this file:
    include 'connect.php';
    
    #Condtion if the button isset or not:
    if(isset($_POST['submit'])){

        #Define The Variables:
        $user = $_POST['userName'];
        $mail = $_POST['mail'];
        $passField = $_POST['pass'];
        $CPassField = $_POST['CPass'];
        $pass = md5($_POST['pass']);
        $CPass = md5($_POST['CPass']);

    
        #Define The Variables Errors:
        $userError = '';
        $mailError = '';
        $passError = '';
        $CPassError = '';
        $recaptchaError = '';

        #Compare Between var user and the column user:
        $sqlUser = "SELECT * FROM `loginn` WHERE `user` = '$user'";
        $resultUser = mysqli_query($conn, $sqlUser);
        $userCount = mysqli_num_rows($resultUser);

        #Compare Between var mail and the column mail:
        $sqlMail = "SELECT * FROM `loginn` WHERE `mail` = '$mail'";
        $resultMail = mysqli_query($conn, $sqlMail);
        $mailCount = mysqli_num_rows($resultMail);

        #The Validation:
        if(strlen($user) < 2){
            $userError = 'The user Have to be More Than or equal 3';    
        }else if($userCount >= 1){
            $userError = 'The user is already taken';
        }else if($mailCount >= 1){
            $mailError = 'The mail is already in use';
        }else if($mail == ''){
            $mailError = 'The mail is empty';
        }else if($passField == ''){
            $passError = 'The Password is empty';
        }else if(strlen($passField) < 6){
            $passError = 'The Password Have to be more then 6 letters';
        }else if(strlen($passField) > 15){
            $passError = 'The Password Have to be less then 16 letters';
        }else if($CPass != $pass){
            $CPassError = 'The Password is not like the other';
        }else{
            #The code in SQL:
            $sql = "INSERT INTO `loginn`(`id`, `user`, `mail`, `pass`) VALUES ('NULL','$user','$mail','$pass')";
            $result = mysqli_query($conn, $sql);
            
            #Condtion if the var result is working or not:
            if($result){
                header('Location:index.php');
            }else{
                echo '<script>
                      window.location.href = "sign.php";
                      alert("There is error Please try again");
                      </script>';
            }
        }
    }  
    
    
?>