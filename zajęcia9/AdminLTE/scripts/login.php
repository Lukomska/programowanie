<?php
session_start();
if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    echo "ok";
}else{
    $_SESSION['error'] = "Wypełnij wszystkie pola!";
    header('location: ../');
}
?>