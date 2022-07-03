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
    <link rel="stylesheet" href="styles/photo.css">
    <title>Новости</title>
</head>
<body>
<script>
var d = document.getElementById("photo");
d.className += " active";
</script>

    <div class="container-fluid">
    <section class="leftbar">
        <h1>галерея</h1>
        <div class="palka"></div>
    </section>
    <div class="news">
        <div class="container">
            <div class="row">
                

                

<?php
    include("db.php"); // Вывод всех новостей
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
                            <img src='img/$img' alt=''>
                        </div>
                        <div class='description'>
                            <p>";
                            echo mb_strimwidth($desc, 0, 100, "...");
                            echo"</p>
                            <form action='gallery.php' method='post'>
                            <input type='hidden' name='idGal' value='$id'>
                            <button type='submit' name='toGal'>Посмотреть</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
include("footer.php")
?>