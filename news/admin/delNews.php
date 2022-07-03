<?php
include("../db.php");
if(ISSET($_POST['del'])){
    $idNews = $_POST['idNew'];

    $sql = "DELETE FROM `news` WHERE idNews = '$idNews'";
    $result = mysqli_query($db, $sql);
    echo"<script> document.location.href = 'manNews.php'</script>";
}
?>