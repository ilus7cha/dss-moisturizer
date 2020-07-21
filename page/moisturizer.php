<?php
require './connect.php';
?>
<style>
@import url("https://fonts.googleapis.com/css?family=Work+Sans:400,600");
* {
  padding: 0;
  margin: 0;
  font-family: 'Work Sans', sans-serif;
  color: #36304A;
  font-weight: 500;
  letter-spacing: normal; }

.text-white {
  color: white; }

a {
  text-decoration: none; }

a.link {
  color: #135a4c;
  font-weight: 600; }

h1 {
  font-size: 2em; }

h2 {
  font-size: 1.5em; }

h3 {
  font-size: 1.17em; }

h4 {
  font-size: 1em; }

h5 {
  font-size: 0.83em; }

h6 {
  font-size: 0.67em; }

b, h1, h2, h3, h4, h5 {
  padding: 0;
  font-weight: 600 !important;
  margin: 0.83em 0em; }
  b span, h1 span, h2 span, h3 span, h4 span, h5 span {
    font-weight: 600; }

.b-bolder {
  font-weight: 800; }

.text-center {
  text-align: center;
  text-align: -moz-center;
  text-align: -webkit-center; }

.text-green {
  color: #1aab4c !important; }

input, select {
  border: none;
  width: 100%; }

.form-custom {
  padding: 5px 10px;
  border: solid 1px #BDC3C7;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  box-sizing: border-box;
  box-shadow: inset 0 0 8px #d9dfe3;
  margin: 3px 0 10px 0; }

.inline-form {
  display: flex;
  align-items: center; }
  .inline-form input {
    flex: 1; }
  .inline-form .form-custom {
    margin: 0px 10px 0px 0px !important; }

.input-dropdown {
  position: relative; }
  .input-dropdown ul.dropdown {
    visibility: hidden;
    list-style: none;
    position: absolute;
    background-color: white;
    text-align: right;
    right: 0;
    border-radius: 5px;
    border: solid 1px #d8d8d8;
    box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.3); }
    .input-dropdown ul.dropdown li {
      min-width: 100px;
      padding: 5px 20px; }
      .input-dropdown ul.dropdown li a {
        display: block;
        color: #666666; }
        .input-dropdown ul.dropdown li a:hover {
          color: #444444; }

.show {
  visibility: visible !important; }

.btn {
  border: none;
  -webkit-padding: 7px 10px;
  -o-padding: 7px 10px;
  -moz-padding: 7px 10px;
  padding: 7px 10px;
  border-radius: 3px;
  margin: 5px 0px;
  display: inline-block;
  cursor: pointer;
  font-size: 10pt !important; }
  .btn i {
    color: white !important; }

.btn-green {
  background-color: #1aab4c;
  color: white !important; }
  .btn-green:hover {
    background-color: #1AB14B; }

.btn-light-green {
  background-color: #76bd47;
  color: white !important; }
  .btn-light-green:hover {
    background-color: #80CB4B; }

.btn-yellow {
  background-color: #bad530;
  color: white !important; }
  .btn-yellow:hover {
    background-color: #C2DE31; }

.btn-second {
  background-color: transparent;
  color: #1aab4c;
  font-weight: 600; }
  .btn-second:hover {
    color: #55bf17; }

.btn-full {
  width: 100%; }

.row {
  margin-top: 10px;
  display: flex; }

div[class^="col-"] {
  margin-left: 3%; }
  div[class^="col-"]:first-child {
    margin-left: 0%; }

.col-1 {
  width: 5.5833333333%; }

.col-2 {
  width: 14.1666666667%; }

.col-3 {
  width: 22.75%; }

.col-4 {
  width: 31.3333333333%; }

.col-5 {
  width: 39.9166666667%; }

.col-6 {
  width: 48.5%; }

.col-7 {
  width: 57.0833333333%; }

.col-8 {
  width: 65.6666666667%; }

.col-9 {
  width: 74.25%; }

.col-10 {
  width: 82.8333333333%; }

.col-11 {
  width: 91.4166666667%; }

.col-12 {
  width: 100%; }

@media screen and (max-width: 600px) {
  .row {
    flex-direction: column; }

  div[class^="col-"] {
    width: 100%;
    margin-right: 0; } }
.table-responsive {
  overflow-y: hidden; }

table {
  width: 100%;
  text-align: center;
  border-collapse: collapse;
  margin: 5px 0px 15px 0px; }
  table tr th {
    padding: 8px 0px;
    border: solid 1px #e9ecef;
    border-bottom: solid 2px #e4e7ea;
    font-weight: bold; }
  table td {
    border: solid 1px #e9ecef;
    padding: 5px; }
  table tr#data:hover {
    background-color: #ececec; }
  table tr#data:nth-child(odd) {
    background-color: #f2f2f2; }

.alert {
  border-radius: 2px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
  padding: 20px;
  z-index: 3;
  position: absolute;
  top: 20px; }

.alert-red {
  background-color: #ffc0cb;
  border: solid 1px #800000;
  color: #802029; }

.alert-blue {
  background-color: #d4edda;
  border: solid 1px #c3e6cb;
  color: #155724; }

.panel {
  background-color: white;
  border-radius: 3px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
  margin-bottom: 20px;
  overflow: hidden; }

.panel-top-edit {
  background-color: #ffc0cb;
  box-shadow: inset 0px 0px 2px #800000;
  color: #802029; }
  .panel-top-edit b, .panel-top-edit i {
    color: #802029; }

.panel-top {
  padding: 10px;
  box-sizing: padding-box;
  border-bottom: solid 1px #dddddd; }

.panel-middle {
  padding: 10px;
  box-sizing: padding-box; }

.panel-bottom {
  padding: 10px;
  border-bottom: solid 3px #135a4c;
  border-top: solid 1px #dddddd; }

header {
  padding: 15px 0px;
  background-color: white;
  width: 100vw;
  text-align: center; }

nav {
  background-color: #1aab4c;
  width: 100vw; }
  nav button#hidden {
    display: none; }

ul.nav {
  width: 60vw;
  display: flex;
  justify-content: space-around;
  list-style: none;
  margin: 0 auto;
  padding: 0; }
  ul.nav li a {
    font-size: 11pt;
    display: block;
    text-decoration: none;
    color: white;
    padding: 6px 18px; }
    ul.nav li a:hover {
      background-color: #13903e; }

@media screen and (max-width: 600px) {
  nav button#hidden {
    display: unset;
    margin: 0 auto !important; }
  nav ul.nav {
    flex-direction: column;
    text-align: center;
    display: none; } }
main {
  position: relative;
  display: flex;
  justify-content: center; }
  main #bg-green {
    background-color: #1aab4c;
    width: 100vw;
    height: 30px;
    z-index: 0; }
  main #main-body {
    width: 70vw;
    z-index: 1;
    top: 0;
    position: absolute; }

body {
  background-color: #ECF0F1;
  display: flex;
  width: 100vw;
  height: 100vh;
  align-items: center;
  flex-direction: column;
  overflow-x: hidden;
  font-size: 11pt; }

#animation {
  -webkit-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out; }

#judul {
  display: flex;
  align-items: center; }
  #judul img {
    margin-right: 10px; }
  #judul #judul-text {
    color: #666666; }
    #judul #judul-text h2 {
      margin: 0 !important; }

/*# sourceMappingURL=style.css.map */

</style>
<button class="btn btn-second" id="hidden"><i class="fa fa-list text-white"></i></button>
<ul class="nav">
    <li><a href="./page/beranda.php">Beranda</a></li>
    <li><a href="./page/moisturizer.php">Moisturizer</a></li>
    <li><a href="./page/kriteria.php">Kriteria</a></li>
    <li><a href="./page/bobot.php">Bobot</a></li>
    <li><a href="./page/hasil.php">Hasil</a></li>
    <li><a href="./logout.php" id="out">Keluar</a></li>
</ul>
<div class="panel">
    <div class="panel-middle" id="judul">
        <img src="moist.svg">
        <div id="judul-text">
            <h2 class="text-green">Moisturizer</h2>
            Halamanan Administrator Data Moisturizer
        </div>
    </div>
</div>
<!-- judul -->
<div class="row">
    <div class="col-4">
        <div class="panel">
            <?php
            if (@htmlspecialchars($_GET['aksi'])=='ubah'){
                include 'ubahmoisturizer.php';
            }else{
                include 'tambahmoisturizer.php';
            }
            ?>
        </div>
    </div>
    <div class="col-8">
        <div class="panel">
            <div class="panel-top">
                <b class="text-green">Daftar Moisturizer</b>
            </div>
            <div class="panel-middle">
                <div class="table-responsive">
                    <table>
                        <thead><tr><th>No</th><th>Merk</th><th>Deskripsi</th><th>Aksi</th></tr></thead>
                        <tbody>
                        <?php
                        $query="SELECT * FROM moisturizer";
                        $execute=$konek->query($query);
                        if ($execute->num_rows > 0){
                            $no=1;
                            while($data=$execute->fetch_array(MYSQLI_ASSOC)){
                                echo"
                                <tr id='data'>
                                    <td>$no</td>
                                    <td>$data[namamoist]</td>
                                    <td>$data[deskripsi]</td>
                                    <td>
                                    <div class='norebuttom'>
                                    <a class=\"btn btn-light-green\" href='./?page=moisturizer&aksi=ubah&id=".$data['id_moist']."'><i class='fa fa-pencil-alt'></i></a>
                                    <a class=\"btn btn-yellow\" data-a=".$data['namamoist']." id='hapus' href='./proses/proseshapus.php/?op=supplier&id=".$data['id_moist']."'><i class='fa fa-trash-alt'></i></a>
                                    </div></td>
                                </tr>";
                                $no++;
                            }
                        }else{
                            echo "<tr><td  class='text-center text-green' colspan='3'>Kosong</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-bottom"></div>
        </div>
    </div>
</div>