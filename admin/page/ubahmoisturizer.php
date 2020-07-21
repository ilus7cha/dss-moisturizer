<?php
$id=htmlspecialchars(@$_GET['id']);
$query="SELECT * FROM moisturizer WHERE id_moist='$id'";
$execute=$konek->query($query);
if ($execute->num_rows > 0){
    $data=$execute->fetch_array(MYSQLI_ASSOC);
}else{
    header('location:./?page=moisturizer');
}
?>
<div class="panel-top panel-top-edit">
    <b><i class="fa fa-pencil-alt"></i> Ubah Data</b>
</div>
<form id="form" method="POST" action="./proses/prosesubah.php">
    <input type="hidden" name="op" value="moist">
    <input type="hidden" name="id" value="<?php echo $data['id_moist']; ?>">
    <div class="panel-middle">
        <div class="group-input">
            <label for="moist" >Merk Moisturizer</label>
            <input type="text" value="<?php echo $data['namamoist']; ?>" class="form-custom" required autocomplete="off" placeholder="Masukkan merk moisturizer" id="moist" name="moist">
        </div>
        <div class="group-input">
            <label for="deskripsi" >Deskripsi</label>
            <input type="text" value="<?php echo $data['deskripsi']; ?>" class="form-custom" required autocomplete="off" placeholder="Masukkan deksripsi" id="deskripsi" name="deskripsi">
        </div>
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-green"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-second">Reset</button>
    </div>
</form>