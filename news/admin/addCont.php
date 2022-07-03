<?php
include("../db.php");
if(move_uploaded_file($_FILES['filename']['tmp_name'], '../img/'.$_FILES['filename']['name'])){
    $fam = $_POST['firstname'];
    $name = $_POST['lastname'];
    $father = $_POST['fathername'];
    $pos = $_POST['position'];
    $tel = $_POST['tel'];
    $cab = $_POST['cab'];
    $img =  $_FILES['filename']['name'];
    $q = "INSERT INTO `contact`(`Firstname`, `Lastname`, `Fathername`, `Position`, `img`, `tel`, `cab`) VALUES ('$fam','$name','$father','$pos','$img','$tel','$cab')";
    $res = mysqli_query($db, $q);
    echo"<script> document.location.href = 'manCont.php'</script>";
}
?>