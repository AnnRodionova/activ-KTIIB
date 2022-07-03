<?php
$id = $_POST['id'];
include("../db.php");
$sql = "DELETE FROM `event` WHERE idEvent = '$id'";
$result = mysqli_query($db, $sql);
echo"<script> document.location.href = 'manEvent.php'</script>";
?>