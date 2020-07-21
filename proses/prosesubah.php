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
$kriteria=@$_POST['kriteria'];
$sifat=@$_POST['sifat'];
$nilai=@$_POST['nilai'];
$bobot=@$_POST['bobot'];
switch ($op){
    case 'barang':
        $query="UPDATE jenis_barang SET namaBarang='$barang' WHERE id_jenisbarang='$id'";
        $crud->update($query,$konek,'./?page=barang');
        break;
    case 'moisturizer':
        $cek="SELECT namamoist FROM moisturizer WHERE namamoist='$moisturizer'";
        $query="UPDATE moisturizer SET namamoist='$moisturizer', deskripsi='$deskripsi' WHERE id_moist='$id'";
        $crud->multiUpdate($cek,$query,$konek,'./?page=moisturizer');
        break;
    case 'kriteria':
        $cek="SELECT namaKriteria FROM kriteria WHERE namaKriteria='$kriteria'";
        $query="UPDATE kriteria SET namaKriteria='$kriteria',sifat='$sifat' WHERE id_kriteria='$id';";
        $crud->multiUpdate($cek,$query,$konek,'./?page=kriteria');
        break;
    case 'bobot':
        $query=null;
        for ($i=0;$i<count($id);$i++){
            $query.="UPDATE bobot_kriteria SET bobot='$bobot[$i]' WHERE id_bobotkriteria='$id[$i]';";
        }
        $crud->update($query,$konek,'./?page=bobot');
    break;
}