<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cont.css">
    <title></title>
</head>
<body>

<script>
var d = document.getElementById("cont");
d.className += " active";
</script>

    <div class="container">

        <div class="row">
            <?php
        include("db.php"); // Вывод всех новостей
    $sql = "SELECT * FROM `contact` "; // сортировка по убыванию
    $result = mysqli_query($db, $sql);
    while($myrow= mysqli_fetch_array($result)){
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
                            <img src='img/$img' alt='' srcset=''>
                        </div>
                        <div class='info'>
                            <h1>$lastn $firstn $fathern </h1>
                            <p>$posit</p>
                            <p>$cab<p>
                            <p>$tel</p>
                        </div>
                    </div>
                </div>
";
    }
                ?>

        </div>
    </div>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include("footer.php")
?>

