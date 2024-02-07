<?php
    include("config.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result= mysqli_query($db,$query);

    if(mysqli_num_rows($result)>0){
        $_SESSION['username'] =$username;
        header('location: index.php');
    }else{
        echo"login gagal.silahkan coba lagi <a href='login.php'>disini</a>";
    }
    mysqli_close($db);
    ?>