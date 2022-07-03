<?php
include("manNav.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/manCont.css">
    <link rel="stylesheet" href="../styles/cont.css">


    <title>Document</title>
</head>
<body>
    <section>
<div class="redactor">
        <form action="addCont.php" method="POST" enctype="multipart/form-data">
        <div class="addCont">
            <h1>Добавление Контакта</h1>
            <p>Фамилия</p>
            <input type="text" name="lastname" id="">
            <p>Имя</p>
            <input type="text" name="firstname" id="">
            <p>Отчество</p>
            <input type="text" name="fathername" id="">
            <p>Должность</p>
            <input type="text" name="position" id="">
            <p>Телефон</p>
            <input type="text" name="tel" id="">
            <p>Кабинет</p>
            <input type="text" name="cab" id="">
            <p>Изображение</p>
            <input type="file" name="filename" id=""><br>
            <input type="submit" class="btn" value="Сохранить">
        </div>

        </form>
</div>
<div class="container">

        <div class="row">
            <?php
        include("../db.php"); // Вывод всех новостей
    $sql = "SELECT * FROM `contact` "; // сортировка по убыванию
    $result = mysqli_query($db, $sql);
    while($myrow= mysqli_fetch_array($result)){
        $id = $myrow['idContact'];
        $firstn=$myrow['Firstname'];
        $lastn=$myrow['Lastname'];
        $fathern=$myrow['Fathername'];
        $posit=$myrow['Position'];
        $tel=$myrow['tel'];
        $cab=$myrow['cab'];
        $img=$myrow['img'];
        echo"
        <div class='col-md-6 col-lg-6 col-sm-12'>
                    <div class='cont'>
                        <div class='person'>
                            <img src='../img/$img' alt='' srcset=''>
                        </div>
                        <div class='info'>
                            <h1>$lastn $firstn $fathern </h1>
                            <p>$posit</p>
                            <p>$cab<p>
                            <p>$tel</p>
                            <form action='delCont.php' method='post'>
                        <input type='hidden' name='idCont' value='$id'>
                        <button type='submit' name='del'>Удалить</button>
                        </form>
                        </div>
                    </div>
                </div>
";
    }
                ?>

        </div>
    </div>
    </section>
</body>
</html>

