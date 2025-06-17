<?php
session_start(); 
$correct_password = 'viscabarsa';


if (isset($_POST['password'])) {
    $entered_password = $_POST['password'];

    
    if ($entered_password === $correct_password) {
        $_SESSION['status'] = 1;
        header('Location: index.php');
        exit;
    } else {
       
        header('Location: index.html?error=1');
        exit;
    }
}
?>
