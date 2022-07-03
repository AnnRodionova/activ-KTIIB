<?php
include("manNav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/manNews.css">
    <title>Админ-панель новости</title>
</head>
<body>
    <div class="redactor">
        <form action="addNews.php" method="POST" enctype="multipart/form-data">
        <div class="addNews">
            <h1>Добавление новости</h1>
            <p>Название</p>
            <input type="text" name="title" id="">
            <p>Описание</p>
            <textarea name="desc" id="" cols="30" rows="10"></textarea><br>
            <input type="file" name="filename" id=""><br>
            <input type="submit" value="Сохранить">
        </div>

        </form>

        <div class="news">
        <div class="container">
            <div class="row">

<?php
    include("../db.php"); // Вывод всех новостей
    $sql = "SELECT * FROM news ORDER BY idNews DESC "; // сортировка по убыванию
    $result = mysqli_query($db, $sql);
    while($myrow= mysqli_fetch_array($result)){
        $id = $myrow['idNews'];
        $title=$myrow['title'];
        $img=$myrow['img'];
        $desc=$myrow['description'];
        $title=$myrow['title'];
        echo"
                <div class='col-md-6 col-lg-6 col-sm-12'>
                    <div class='new' href='#'>
                        <h1>$title</h1>
                        <div class='photo'>
                            <img src='../img/$img' alt=''>
                        </div>
                        <div class='description'>
                            <p>$desc</p>
                        </div>
                        <form action='delNews.php' method='post'>
                <input type='hidden' name='idNew' value='$id'>
                <button type='submit' name='del'>Удалить</button>
            </form>
                    </div>
                </div>";
    }
                
?>
                
            </div>
        </div>
    </div>


    </div>
</body>
</html>
