<?php
    if(isset($_POST['logout'])){
        session_start();
        //session_unset();
        //session_destroy();
        unset($_SESSION['userID']);
        unset($_SESSION['fName']);
        unset($_SESSION['lName']);
        header("Location: /");
        exit();
    }
?>