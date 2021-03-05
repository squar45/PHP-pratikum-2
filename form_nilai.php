<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!--- this above is head --->

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Form Nilai Siswa</span>
</nav>


<form method="GET" action="form_nilai.php">
Nama : <input type="text" name="nama" value="" size="30"/><br/>
<label for="exampleFormControlSelect1">Mata Kuliah</label>
<select name="matkul">
    <option value="DDP">Dasar-Dasar Pemrograman</option>
    <option value="BDI">Basis Data I</option>
    <option value="WEB1">Pemrograman Web</option>
</select><br/>
Nilai UTS : <input type="text" name="nilai_uts" value="" size="6"/><br/>
Nilai UAS : <input type="text" name="nilai_uas" value="" size="6"/><br/>
Nilai Tugas/Praktikum : <input type="text" name="nilai_tugas"value="" size="6"/><br/>
<input type="submit" value="Simpan" name="proses"/>
</form>

<?php

    $proses= $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];
    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;

?>

<footer>

<!-- As a footer -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">created by : izzudin alqosam 2021</a>
</nav>

</footer>
