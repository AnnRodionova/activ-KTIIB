<?php
include("../db.php");
$id = $_POST['idGal'];
if(isset($_POST['submit'])){
    $countfiles = count($_FILES['file']['name']);
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
        $sql = "INSERT INTO `photo`(`idGal`, `img`) VALUES ('$id','$filename')";
        $result = mysqli_query($db, $sql);
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'../img/'.$filename);
    }
    echo"<script> document.location.href = 'manPhoto.php'</script>";
}
?>