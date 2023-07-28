<?php
session_start();

$codeError = '';

if(isset($_POST['changePasswordBtn'])){
    $verCode = $_SESSION["verficationCode"];
    $codeField = $_POST["codeField"];
    if($verCode == $codeField){
        header('Location: changePass.php');
    }else{
        $codeError = 'The Code is wrong';
    }
}
?>