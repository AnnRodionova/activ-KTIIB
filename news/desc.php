<?php
include("navbar.php");
$id = $_POST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/eventhistory.css">
    <title>Document</title>
</head>
<body>

<?php
include("db.php");
$sql= "SELECT * FROM `news` WHERE idNews = '$id'";
$result = mysqli_query($db, $sql);
    while($myrow= mysqli_fetch_array($result)){
        $title = $myrow['title'];
        $desc = $myrow['description'];
        $img = $myrow['img'];
        echo"
    <div class='container'>
        <h1>$title</h1>
        <img src='img/$img' alt='' srcset=''>
        <p>$desc</p>
    </div>";}
    ?>
</body>
</html>

<?php
include("footer.php");
?>