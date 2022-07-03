<?php
include("../db.php");
if(move_uploaded_file($_FILES['filename']['tmp_name'], '../img/'.$_FILES['filename']['name'])){
    $tit = $_POST['title'];
    $descrip = $_POST['desc'];
    $img =  $_FILES['filename']['name'];
    $q = "INSERT INTO `news`(`title`, `img`, `description`) VALUES ('$tit','$img','$descrip')";
    $res = mysqli_query($db, $q);
    echo"<script> document.location.href = 'manNews.php'</script>";
}
?>