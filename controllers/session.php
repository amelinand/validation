<?php

session_start();

require ('users.php');



foreach($users as $user){
    if($_POST['pseudo'] === $user['pseudo'] && md5($_POST['password']) === $user['password']){
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header('Location: ../index.php');
    }
}
if( !isset($_SESSION['pseudo']) ){
    header('Location: ../log.php?error=');
}




