<?php  

      require 'fungsi.php';

      if(isset($_POST['submit'])){

            if(insert($_POST)>0){

            echo "<script>
                  alert('documet berhasil di tambahkan');
                  document.location.href = 'index.php';
                  </script>";
             }else{

            echo "<script>
            alert('documet gagal di ditambah');
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
      <h1 style="text-align: center;">menambahkan data</h1>
      <br>

      <form action="" method="post">

            <ul style="padding : 20px";>
                  <li>
                        <label for="nama"> NAMA :</label>
                        <input type="text" name="nama" id="nama" required>

                  </li>
                  <li>
                        <label for="nisn"> NISN :</label>
                        <input type="text" name="nisn" id="nisn" required>

                  </li>
                  <li>
                        <label for="alamat"> ALAMAT:</label>
                        <input type="text" name="alamat" id="alamat" required>

                  </li>
                  <li>
                        <label for="email"> EMAIL :</label>
                        <input type="text" name="email" id="email" required>

                  </li>
                  <li>
                        <label for="ket"> KET :</label>
                        <input type="text" name="ket" id="ket" required>

                  </li>

            </ul>
            <br>
                  <button type="submit" name='submit'> kirim data</button>
      </form>

      <br>
      <a href="index.php"> kembali ke index</a>

      
</body>
</html>