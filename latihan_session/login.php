<?php 

      require 'fungsi.php';
      session_start();

      if(isset($_SESSION['login'])){

            header("Location: index.php");
            exit;
      }

 if(isset($_POST['kirim'])){

      // var_dump($_POST);
      $username = $_POST['username'];
      $password = $_POST['password'];

     $result= mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");

     if(mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);
          if(  password_verify($password,$row['password'])){
                $_SESSION['login'] = true;

            header("Location: index.php");
            exit;
          }
     }else{

      echo "<script>
            alert('username dan password salah');
            document.location.href = 'login.php';
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
      <title>Document</title>
      <style>
            label{
                  display: block;
            }
            .login{
                  position: relative;
                  top: 100px;
                  left : 500px;
                  line-height: 30px;
                  padding: 10px;
                 
            }
            h1{

                  margin: 10px;
                  padding: 10px;
            }
      </style>
</head>
<body>

      <div class="login">
            <h1>login page</h1>


      <form action="" method="post">
            <ul>
                  <label for="username"> username</label>
                  <input type="text" name="username" id="username" required autocomplete="off"
                  autofocus placeholder="username" size="30">
            </ul>
            <ul>
                  <label for="password"> password</label>
                  <input type="password" name="password" id="password" required autocomplete="off"
                  autofocus placeholder="password" size="30">
            </ul>
            <button type="submit" name="kirim" >login</button>
      </form>
      </div>
      
</body>
</html