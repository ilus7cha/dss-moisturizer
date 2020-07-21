<div class="panel-top">
    <b class="text-green"><i class="fa fa-plus-circle text-green"></i> Tambah Data</b>
</div>
<form id="form" method="POST" action="./proses/prosestambah.php">
    <input type="hidden" name="op" value="supplier">
    <div class="panel-middle">
        <div class="group-input">
            <label for="moist" >Merk Moisturizer</label>
            <input type="text" class="form-custom" required autocomplete="off" placeholder="Masukkan merk moisturizer" id="moist" name="moist">
        </div>
        <div class="group-input">
            <label for="deskripsi" >Deskripsi</label>
            <input type="text" class="form-custom" required autocomplete="off" placeholder="Masukkan deksripsi" id="deskripsi" name="deskripsi">
        </div>
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-green"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-second">Reset</button>
    </div>
</form>