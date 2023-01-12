<?php 
include "config.php";

  if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['namapelajar'];
    $ndp = $_POST['nondp'];
    $kp = $_POST['nokp'];
    $hp = $_POST['nohp'];
    $jantina = $_POST['jantina'];

    $sql = "INSERT INTO info_pelajar (id, namapelajar, nondp, nokp, nohp, jantina) VALUES ('$id','$nama','$ndp','$kp','$hp','$jantina')";

    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "<script>alert('data berjaya tambah');
      window.location='index.php'</script>"; 
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }
?>

<html>
<head>
    <style>
        .data{
            width: 250px;
        }
    </style>
</head>
<body>
    <h2>tambah</h2>
    <form action="" method="POST">

        <fieldset>
            <legend>DATA</legend>

            Id : <br>
            <input class="data" type="text" name="id">
            <br>
            Nama Pelajar :<br>
            <input class="data" type="text" name="namapelajar">
            <br>
            No Ndp :<br>
            <input class="data" type="text" name="nondp">
            <br>
            No Kp :<br>
            <input class="data" type="text" name="nokp">
            <br>
            No Hp :<br>
            <input class="data" type="text" name="nohp">
            <br>
            Jantina:<br>
            <input type="radio" name="jantina" value="Lelaki">Lelaki
            <input type="radio" name="jantina" value="Perempuan">Perempuan
            <br><br>

            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>
</html>