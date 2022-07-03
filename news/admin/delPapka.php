<?php

include("../db.php");
if(ISSET($_POST['del'])){
    $idGal = $_POST['idGal'];

    $sql = "DELETE FROM `gallery` WHERE idGal = '$idGal'";
    $result = mysqli_query($db, $sql);
    echo"<script> document.location.href = 'manPhoto.php'</script>";
}
?>
