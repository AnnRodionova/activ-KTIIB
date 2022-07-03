<?php
include("../db.php");
if(ISSET($_POST['del'])){
    $id = $_POST['idCont'];

    $sql = "DELETE FROM `contact` WHERE idContact = '$id'";
    $result = mysqli_query($db, $sql);
    echo"<script> document.location.href = 'manCont.php'</script>";
}
?>