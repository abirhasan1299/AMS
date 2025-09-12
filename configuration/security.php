<?php
session_start();
if(!isset($_SESSION['id']) && !isset($_SESSION['unique_code']) && !isset($_SESSION['role']) && !isset($_SESSION['password']) && !isset($_SESSION['email'])){
    header("location:../login.php");
}
?>