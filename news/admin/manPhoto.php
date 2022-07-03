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
    <link rel="stylesheet" href="../styles/photo.css">


    <title>Document</title>
</head>
<body>
    <section>
<div class="redactor">
        <form action="addPapka.php" method="POST" enctype="multipart/form-data">
        <div class="addCont">
            <h1>Добавление папки</h1>
            <p>Название</p>
            <input type="text" name="title" id="">
            <p>Описание</p>
            <input type="text" name="desc" id="">
            <p>Изображение</p>
            <input type="file" name="filename" id=""><br>
            <input type="submit" class="btn" value="Сохранить">
        </div>

        </form>
</div>
<div class="news">
        <div class="container-fluid">
            <div class="row">
                

                

<?php
    include("../db.php"); // Вывод всех новостей
    $sql = "SELECT * FROM gallery ORDER BY idGal DESC "; // сортировка по убыванию
    $result = mysqli_query($db, $sql);
    while($myrow= mysqli_fetch_array($result)){
        $id = $myrow['idGal'];
        $title=$myrow['title'];
        $img=$myrow['img'];
        $desc=$myrow['description'];
        echo"
            
                <div class='col-md-3 col-lg-3 col-sm-12'>
                    <div class='new' href='#'>
                        <h1>$title</h1>
                        <div class='photo'>
                            <img src='../img/$img' alt=''>
                        </div>
                        <div class='description'>
                            <p>";
                            echo mb_strimwidth($desc, 0, 100, "...");
                            echo"</p>
                            <form action='gallery.php' method='post'>
                            <input type='hidden' name='idGal' value='$id'>
                            <button type='submit' name='toGal'>Посмотреть</button>
                            </form>
                            <form action='delPapka.php' method='post'>
                            <input type='hidden' name='idGal' value='$id'>
                            <button type='submit' name='del' style='margin-top:10px; background-color:red;'>Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>";
    }
?>
                
            </div>
        </div>
    </div>
    </section>
</body>
</html>
