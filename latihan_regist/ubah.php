<?php  

      require 'fungsi.php';

      $no = $_GET['no'];

      $mhs = query("SELECT * FROM data_manag WHERE no = $no")[0];

      if(isset($_POST['submit'])){

            if(ubah($_POST)>0){

            echo "<script>
                  alert('documet berhasil di ubah');
                  document.location.href = 'index.php';
                  </script>";
             }else{

            echo "<script>
            alert('documet gagal di ubah');
            document.location.href = 'index.php';
            </script>";
             }
            
            }


?>



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TAMBAH DATA</title>

</head>
<body>
      <h1 style="text-align: center;">ubah data</h1>
      <br>

      <form action="" method="post" enctype="multipart/form-data">     
            <input type="hidden" name="no" value="<?= $no; ?>">
            <input type="hidden" name="gambar-lama" value="<?= $mhs['gambar']; ?>">

            <ul style="padding : 20px";>
                  <li>
                        <label for="nama"> NAMA :</label>
                        <input type="text" name="nama" id="nama" required value="<?= $mhs['nama'];?>"
                        ">

                  </li>
                  <li>
                        <label for="nisn"> NISN :</label>
                        <input type="text" name="nisn" id="nisn" required value="<?= $mhs['nisn'];?>"

                  </li>
                  <li>
                        <label for="alamat"> ALAMAT:</label>
                        <input type="text" name="alamat" id="alamat" required value="<?= $mhs['alamat'];?>"
                  </li>
                  <li>
                        <label for="email"> EMAIL :</label>
                        <input type="text" name="email" id="email" required value="<?= $mhs['email'];?>"

                  </li>
                  <li>
                        <label for="ket"> KET :</label>
                        <input type="text" name="ket" id="ket" required value="<?= $mhs['ket'];?>"

                  </li>
                  <li>
                        <label for="gambar"> gambar :</label>
                        <img src="gambar/<?= $mhs['gambar'] ; ?>" width='200'>
                        <br>
                        <input type="file" name="gambar" id="gambar" required"

                  </li>

            </ul>
            <br>
                  <button type="submit" name='submit'> ubah data</button>
      </form>

      <br>
      <a href="index.php"> kembali ke index</a>

      
</body>
</html>