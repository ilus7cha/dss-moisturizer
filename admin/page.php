<?php
$page=htmlspecialchars(@$_GET['page']);
switch ($page){
    case null:
        include 'page/beranda.php';
        break;
    case 'beranda':
        include 'page/beranda.php';
        break;
    case 'moisturizer':
        include 'page/moisturizer.php';
        break;
    case 'kriteria':
        include 'page/kriteria.php';
        break;
    case 'bobot':
        include 'page/bobot.php';
        break;
    case 'hasil':
        include 'page/hasil.php';
        break;
    case 'tambahbobot':
        include 'page/tambahbobot.php';
        break;
    default:
        include 'page/404.php';
}