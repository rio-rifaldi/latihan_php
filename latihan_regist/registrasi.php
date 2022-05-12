<?php 

      if(isset($_POST['regis'])){

            if($_POST['password'] === $_POST['password2']){

                  echo "<script>
                  alert('berhasil ditambahkan');
                  document.location.href = 'registrasi.php';
                  </script>";

                  
            }else{

                  echo "<script>
                  alert('password dan konfirmasi tidak sama');
                  document.location.href = 'registrasi.php';
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
      <title>registrasi</title>
      <style>
            label{
                  display: block;
            }
      </style>
</head>
<body>
      <h1 >halaman registrasi</h1>

      <form action="" method="post">

            <ul>
                  <li>
                        <label for="username">username :</label>
                        <input type="text" name="username" id="username" autocomplete="off" autofocus required>
                  </li>
                  <li>
                        <label fo   r="password">password :</label>
                        <input type="password" name="password" id="password" autocomplete="off" autofocus required>
                  </li>
                  <li>
                        <label for="password">konfirmasi password :</label>
                        <input type="password" name="password2" id="password" autocomplete="off" autofocus required>
                  </li>
              
                  <br>
                  <button type="submit" name="regis">registrasi</button>
                  


            </ul>
      </form>
      
</body>
</html>