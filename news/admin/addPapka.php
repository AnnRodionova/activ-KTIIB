<?php
include("../db.php");
if(move_uploaded_file($_FILES['filename']['tmp_name'], '../img/'.$_FILES['filename']['name'])){
    $tit = $_POST['title'];
    $desc = $_POST['desc'];
    $img =  $_FILES['filename']['name'];
    $q = "INSERT INTO `gallery`(`title`, `description`, `img`) VALUES ('$tit','$desc','$img')";
    $res = mysqli_query($db, $q);
    echo"<script> document.location.href = 'manPhoto.php'</script>";
}
?>