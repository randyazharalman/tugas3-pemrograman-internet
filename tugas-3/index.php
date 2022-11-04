<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas ke-3 Randy Azhar Alman F</title>
</head>
<style>
  * {
    padding: 10px;
  }
</style>

<body>
  <form action="" method="post">
    <label for="nama">Masukan Nama</label>
    <input type="text" name="nama" id="nama"> <br> <br>
    <label for="index">Masukan Index</label>
    <input type="text" name="index" id="index">
    <button type="submit" name="submit">Proses</button>
  </form>
  <?php
  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $arrayNama = array();
    $strLength = strlen($nama);
    for ($i = 0; $i < $strLength; $i++) {
      $arrayNama[$i] = $nama[$i];
    }
    // print_r(join('',$arrayNama));

    $index = $_POST['index'];
    if (array_key_exists($index, $arrayNama)) {
      echo "<h3 style='padding:20px'>Index ke ".$index. " dari nama<span style='color:red'>".strtoupper($nama).'</span> adalah "'. strtoupper($arrayNama[$index]).'"</h3>';
    } else {
      echo "<h3 style='padding:20px'>Index tidak tersedia</h3>";
    }
  }
  ?>
</body>

</html>
