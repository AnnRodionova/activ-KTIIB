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
    <link rel="stylesheet" href="../styles/event.css">
    <link rel="stylesheet" href="../styles/manEvent.css">
    <title>Document</title>
</head>
<body>
    <section>
<div class="redactor">
        <form action="addEvent.php" class="form" method="POST">
        <div class="addCont">
            <h1>Добавление Мероприятия</h1>
            <p>Название</p>
            <input type="text" name="name" id="">
            <p>Описание</p>
            <textarea name="desc" id="" cols="30" rows="10"></textarea><br>
            <input type="submit" name="addEvent" class="btn" value="Сохранить">
        </div>
        </form>
</div>

    

    <div class="container">

        <div class="row">
            <?php
        include("../db.php"); // Вывод всех новостей
    $sql = "SELECT * FROM `event` "; // сортировка по убыванию
    $result = mysqli_query($db, $sql);
    while($myrow= mysqli_fetch_array($result)){
       $id = $myrow['idEvent'];
       $name = $myrow['name'];
       $desc = $myrow['desc'];
        echo"
        <div class='col-md-4 col-lg-4 col-sm-12'>
                    <div class='cont'>
                        <h1>$name</h1>
                        <p>$desc</p>
                            <form action='delEvent.php' method='post'>
                        <input type='hidden' name='id' value='$id'>
                        <button type='submit' name='del' class='del'>Удалить</button>
                        </form>
                      
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

