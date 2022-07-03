<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/log.css">
    <title>Document</title>
</head>
<body>
    <div class="log">
        <form action="" method="post">
        <div class="email">
        <p>Логин</p>
        <input type="text" name="emailIn" id="">
        </div>
        <div class="password">
        <p>Пароль</p>
        <input type="password" name="passIn" id="">
        </div>
        <button type="submit" name="signin">Вход</button>
        </form>
    </div>
</body>
</html>

<?php
if(ISSET($_POST['signin'])){
        $email = $_POST['emailIn'];
        $passw = $_POST['passIn'];
     
        if(empty($email) or empty($passw)){
            exit("Вы ввели не всю информацию");
        }
        include("db.php");
  $query = "SELECT * FROM `user` WHERE login='$email'";
  $result = mysqli_query($db, $query);
  $myrow = mysqli_fetch_array($result);
  
  if(empty($myrow['login'])){
      exit("Извините, пользователь с таким логином/email не зарегистрирован");
  }
  else{
      if ($myrow['password']==$passw){
          $_SESSION['login'] =$myrow['login'];
          $_SESSION['idUser'] =$myrow['idUser'];
          echo"<script> document.location.href = 'admin/manNews.php'</script>";
      }
      else{
          exit("Пароль неверный");
      }
  }
}
