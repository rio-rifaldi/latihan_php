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
                  top: 200px;
                  left : 500px;
                  line-height: 30px;
                  padding: 10px;
                  
            }
      </style>
</head>
<body>

      <div class="login">

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
      </form>
      </div>
      
</body>
</html>