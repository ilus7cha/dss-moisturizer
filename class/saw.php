<?php

class saw {

    private $konek;
    private $idCookie;
    public $simpanNormalisasi=array();
    public function setconfig($konek,$idCookie){
        $this->konek=$konek;
        $this->idCookie=$idCookie;
    }
    public function getConnect(){
       return $this->konek;
    }
    //mendapatkan kriteria
    public function getKriteria(){
        $data=array();
        $querykriteria="SELECT namaKriteria FROM kriteria";//query tabel kriteria
        $execute=$this->getConnect()->query($querykriteria);
        while ($row=$execute->fetch_array(MYSQLI_ASSOC)) {
            array_push($data,$row['namaKriteria']);
        }
        return $data;
    }
    //mendapatkan alternative
    public function getAlternative(){
        $data=array();
        $queryAlternative="SELECT moisturizer.namamoist AS namamoist,id_moist FROM nilai_moist INNER JOIN moisturizer USING(id_moist) WHERE id_jenisbarang='$this->idCookie' GROUP BY id_moist ";
        $execute=$this->getConnect()->query($queryAlternative);
        while ($row=$execute->fetch_array(MYSQLI_ASSOC)) {
            array_push($data,array("namamoist"=>$row['namamoist'],"id_moist"=>$row['id_moist']));
        }
        return $data;
    }
    public function getNilaiMatriks($id_moist){
        $data=array();
        $queryGetNilai="SELECT nilai_kriteria.nilai AS nilai,kriteria.sifat AS sifat,nilai_moist.id_kriteria AS id_kriteria FROM nilai_moist JOIN kriteria ON kriteria.id_kriteria=nilai_moist.id_kriteria JOIN nilai_kriteria ON nilai_kriteria.id_nilaikriteria=nilai_moist.id_nilaikriteria WHERE (id_jenisbarang='$this->idCookie' AND id_moist='$id_moist')";
        $execute=$this->getConnect()->query($queryGetNilai);
        while ($row=$execute->fetch_array(MYSQLI_ASSOC)) {
            array_push($data,array(
                "nilai"=>$row['nilai'],
                "sifat"=>$row['sifat'],
                "id_kriteria"=>$row['id_kriteria']
            ));
        }
        return $data;
    }
    public function getArrayNilai($id_kriteria){
        $data=array();
        $queryGetArrayNilai="SELECT nilai_kriteria.nilai AS nilai FROM nilai_moist INNER JOIN nilai_kriteria ON nilai_moist.id_nilaikriteria=nilai_kriteria.id_nilaikriteria WHERE nilai_moist.id_kriteria='$id_kriteria' AND nilai_moist.id_jenisbarang='$this->idCookie'";
        $execute=$this->getConnect()->query($queryGetArrayNilai);
        while ($row=$execute->fetch_array(MYSQLI_ASSOC)) {
            array_push($data,$row['nilai']);
        }
        return $data;
    }
    //rumus normalisasai
    public function normalisasi($array,$sifat,$nilai){
        if ($sifat=='Benefit'){
            $result=$nilai/max($array);
        }elseif ($sifat=='Cost'){
            $result=min($array)/$nilai;
        }
        return round($result,3);
    }
    //mendapatkan bobot kriteria
    public function getBobot($id_kriteria){
        $queryBobot="SELECT bobot FROM bobot_kriteria WHERE id_jenisbarang='$this->idCookie' AND id_kriteria='$id_kriteria' ";
        $row=$this->getConnect()->query($queryBobot)->fetch_array(MYSQLI_ASSOC);
        return $row['bobot'];
    }
    //meyimpan hasil perhitungan
    public function simpanHasil($id_moist,$hasil){
        $queryCek="SELECT hasil FROM hasil WHERE id_moist='$id_moist' AND id_jenisbarang='$this->idCookie'";
        $execute=$this->getConnect()->query($queryCek);
        if ($execute->num_rows > 0) {
            $querySimpan="UPDATE hasil SET hasil='$hasil' WHERE id_moist='$id_moist' AND id_jenisbarang='$this->idCookie'";
        }else{
            $querySimpan="INSERT INTO hasil(hasil,id_moist,id_jenisbarang) VALUES ('$hasil','$id_moist','$this->idCookie')";
        }
        $execute=$this->getConnect()->query($querySimpan);

    }
    //mencari kesimpulan
    public function getHasil(){
    $queryHasil     =   "SELECT hasil.hasil AS hasil,jenis_barang.namaBarang,moisturizer.namamoist AS namamoist FROM hasil JOIN jenis_barang ON jenis_barang.id_jenisbarang=hasil.id_jenisbarang JOIN moisturizer ON moisturizer.id_moist=hasil.id_moist WHERE hasil.hasil=(SELECT MAX(hasil) FROM hasil WHERE id_jenisbarang='$this->idCookie')";
    $execute        =   $this->getConnect()->query($queryHasil)->fetch_array(MYSQLI_ASSOC);
    echo "<p>Jadi rekomendasi pemilihan <i>$execute[namaBarang]</i> untuk jenis kulit wajah berminyak jatuh pada <i>$execute[namamoist]</i> dengan Nilai <b>".round($execute['hasil'],3)."</b></p>";
    }

}