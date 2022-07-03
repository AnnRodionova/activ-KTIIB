<?php
include("../db.php");
$name = $_POST['name'];
$desc = $_POST['desc'];
$today = date("Y-m-d"); 
if(isset($_POST['addEvent'])){
        $sql = "INSERT INTO `event`(`name`, `desc`, `date`) VALUES ('$name','$desc','$today')";
        $result = mysqli_query($db, $sql);
        echo"<script> document.location.href = 'manEvent.php'</script>";
    }
    

?>