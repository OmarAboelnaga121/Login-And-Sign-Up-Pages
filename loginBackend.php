<?php 
    session_start();
    include 'connect.php';

    $errors = '';

    if(isset($_POST['btn'])){

        $user = $_POST['userName'];
        $_SESSION["user"] = $user;
        $pass = md5($_POST['pass']);

        $sql = "SELECT * FROM loginn WHERE user = '$user' and pass = '$pass'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count >= 1){
            header('Location:welcome.php');
        }else if($count == 0){
            $errors = 'There is an error with username or password';
        }
        
    }
?>