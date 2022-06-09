<?php

      require "fungsi.php";

      if(isset($_POST['regis'])){

       
                  if(regis($_POST)>0){

                        echo "<script>
                        alert('berhasil ditambahkan');
                        document.location.href = 'login.php';
                        </script>";
                  }else{

                        mysqli_error($conn);
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
                  padding:7px;
            }
            .regis{
                  line-height: 30px;
                  width: max-content;
                  padding: 50px;
                  border: 2px solid black;
                  position: relative;
                  top: 50px;
                  left: 500px;
                  border-radius: 20px;
                 
            }
            h1{

                  margin: 10px;
                  padding: 10px;
                  width: 100%
            }
            input{
                  padding: 10px 9px;
                  border-radius: 10px;
            }
            button{
                  width: 100%;
                  padding: 12px 10px;
                  border: none;
                  background-color: green;
                  border-radius: 10px;
                  color: white;
                  font-size: 17px;
                  cursor: pointer;
            }
            ul{
                  margin: 0;
                  padding: 0;
                  margin: 20px;
                  list-style-type: none;
            }
      </style>
</head>
<body>

      <div class="regis">
            
            <h1 >halaman registrasi</h1>

            <form action="" method="post">

                  <ul>
                        <li>
                              <label for="username">username :</label>
                              <input type="text" name="username" id="username" autocomplete="off" autofocus required placeholder="username">
                        </li>
                        <li>
                              <label fo r="password">password :</label>
                              <input type="password" name="password" id="password" autocomplete="off" autofocus required placeholder="password">
                        </li>
                        <li>
                              <label for="password">konfirmasi password :</label>
                              <input type="password" name="password2" id="password" autocomplete="off" autofocus required placeholder="konfirmasi password">
                        </li>
                  
                        <br>
                        <button type="submit" name="regis" required>registrasi</button>
                        


                  </ul>
                  </form>
            </div>
      
</body>
</html>