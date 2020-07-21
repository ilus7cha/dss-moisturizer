<?php
require '../connect.php';
require '../class/crud.php';
$crud=new crud($konek);

if ($_SERVER['REQUEST_METHOD']=='GET') {
    $id=@$_GET['id'];
    $op=@$_GET['op'];
}else if ($_SERVER['REQUEST_METHOD']=='POST'){
    $id=@$_POST['id'];
    $op=@$_POST['op'];
}
$barang=@$_POST['barang'];
$moisturizer=@$_POST['moisturizer'];
$deskripsi=@$_POST['deskripsi'];
$kriteria=@$_POST['kriteria'];
$sifat=@$_POST['sifat'];
$nilai=@$_POST['nilai'];
$bobot=@$_POST['bobot'];
switch ($op){
    case 'barang'://tambah data barang
        $query="INSERT INTO jenis_barang (namaBarang) VALUES ('$barang')";
        $crud->addData($query,$konek);
    break;
    case 'moisturizer': //tambah data moist
        $cek="SELECT namamoist FROM moisturizer WHERE namamoist='$moisturizer'";
        $query=null;
        $query="INSERT INTO moisturizer (namamoist,deskripsi) VALUES ('$moisturizer', '$deskripsi')";
        $crud->multiAddData($cek,$query,$konek);
    break;
    case 'kriteria'://tambah data kriteria
        $cek="SELECT namaKriteria FROM kriteria WHERE namaKriteria='$kriteria'";
        $query=null;
        $query="INSERT INTO kriteria (namaKriteria,sifat) VALUES ('$kriteria','$sifat')";
        $crud->multiAddData($cek,$query,$konek);
    break;
    case 'bobot'://tambah data bobot
        $cek="SELECT id_bobotkriteria FROM bobot_kriteria WHERE id_jenisbarang='$barang'";
        $query=null;
        for ($i=0;$i<count($kriteria);$i++){
            $query.="INSERT INTO bobot_kriteria (id_jenisbarang,id_kriteria,bobot) VALUES ('$barang','$kriteria[$i]','$bobot[$i]');";
        }
        $crud->multiAddData($cek,$query,$konek);
    break;
}