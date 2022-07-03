<?php
include("manNav.php");
$idgal = $_POST['idGal'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/manCont.css">
    <link rel="stylesheet" href="../styles/gal.css">
    <title></title>
</head>
<body>
<?php
echo"
<div class='redactor'>
        <form action='addPhoto.php' method='POST' enctype='multipart/form-data'>
        <div class='addCont'>
            <h1>Добавление фотографий</h1>
            <input type='hidden' name='idGal' value='$idgal'>
            <input type='file' name='file[]' id='file' multiple>
            <input type='submit' name='submit' value='Загрузить'>
        </div>

        </form>
</div>
";
?>
<div class='photo'>
<?php
    include("../db.php"); // Вывод всех новостей
    $sql = "SELECT * FROM photo WHERE idGal = '$idgal' "; // сортировка по убыванию
    $result = mysqli_query($db, $sql);
    while($myrow= mysqli_fetch_array($result)){
        $img=$myrow['img'];
        echo"
                        
                            <img src='../img/$img' alt=''>
                        ";
    }
?>
</body>
</html>