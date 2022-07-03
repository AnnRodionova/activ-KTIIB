
<script>
  var element = document.getElementById("photo");
  element.className += "active";
</script>
<?php
include("navbar.php");
$idgal = $_POST['idGal'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/gal.css">
    <title>Фотографии</title>
</head>
<body>
<div class='photo'>
<?php
    include("db.php"); // Вывод всех новостей
    $sql = "SELECT * FROM photo WHERE idGal = '$idgal' "; // сортировка по убыванию
    $result = mysqli_query($db, $sql);
    while($myrow= mysqli_fetch_array($result)){
        $img=$myrow['img'];
        echo"
                        
                            <img src='img/$img' alt=''>
                        ";
    }
?>
</div>


</body>
</html>
<?php
include("footer.php");
?>