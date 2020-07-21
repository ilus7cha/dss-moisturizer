<?php
$konek=new mysqli('localhost','root','','spkmoisturizer');
if ($konek->connect_errno){
    "Database Error".$konek->connect_error;
}
?>