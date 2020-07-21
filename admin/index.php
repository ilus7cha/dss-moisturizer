<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
    include 'login.php';
}else{
    include 'admin.php';
}