<?php 
include 'connect.php';
session_start();



$passError = ''; 
$cPassError = ''; 

if(isset($_POST['passBtn'])){

    $pass = md5($_POST['passField']);
    $Cpass = md5($_POST['cPassField']);

    $passField = $_POST['passField'];
    $CpassField = $_POST['cPassField'];

    $forgetMail = $_SESSION['forgetMail'];
    
    if(strlen($passField) < 6){
        $passError = 'The Password Have to be more then 6 letters';
    }else if(strlen($passField) > 15){
        $passError = 'The Password Have to be less then 16 letters';
    }else if($pass != $Cpass ){
        $cPassError = 'They are not the same';
    }else{
        $sql = "UPDATE `loginn`
        SET pass = '$pass'
        WHERE mail = '$forgetMail'";
        $result = mysqli_query($conn, $sql);
        
        #Condtion if the var result is working or not:
        if($result){
            header('Location:index.php');
        }else{
            $passError = 'Sorry There is an error Please Try again';
        }
    }

}

?>