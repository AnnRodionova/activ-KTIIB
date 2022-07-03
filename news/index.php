<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <title>Новости</title>
</head>
<body>
<script>
var d = document.getElementById("new");
d.className += "active";
</script>
    <div class="container-fluid">
    <section class="leftbar">
        <h1>НОВОСТИ АКТИВИСТОВ</h1>
        <div class="palka"></div>
    </section>
    <div class="news">
        <div class="container">
            <div class="row">

<?php
    include("db.php"); // Вывод всех новостей
    $sql = "SELECT * FROM news ORDER BY idNews DESC "; // сортировка по убыванию
    $result = mysqli_query($db, $sql);
    while($myrow= mysqli_fetch_array($result)){
        $id=$myrow['idNews'];
        $title=$myrow['title'];
        $img=$myrow['img'];
        $desc=$myrow['description'];
        $title=$myrow['title'];
        echo"
                <div class='col-md-6 col-lg-6 col-sm-12'>
                    <div class='new' href='#'>
                        <h1>$title</h1>
                        <form action='desc.php' method='post'>
                        <div class='photo'>
                            <img type='submit' src='img/$img' alt=''>
                        </div>
                        </form>
                        
                        <div class='description'>
                            <p>";
                            echo mb_strimwidth($desc, 0, 100, "...");
                            echo"</p>
                        </div>
                        <div class='more'>
                        <form action='desc.php' method='post'>
                        <input type='hidden' name='id' value='$id'>
                        <input type='submit' name='addEvent' class='btn' value='Подробнее'>
                        </form>
                        </div>
                    </div>
                </div>";
    }
?>
                
            </div>
        </div>
    </div>
    </div>

    <?php
include("footer.php")
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
