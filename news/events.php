<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/event.css">
    <title>Document</title>
</head>
<body>
<script>
var d = document.getElementById("event");
d.className += " active";
</script>
<div class="search">
<?php 
?>
<form action="eventhistory.php" method="post">
        <div class="email">
        <p>Впишите дату</p>
        <input type="date" name="date" id="">
        </div>
        <button type="submit" name="signin" class>Выбрать</button>
</form>
</div>
<!--
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm12 col-md-4">
            <div class="event">
                <h1>Названия</h1>
                <p>Описание мероприятия, которое произойдет</p>
            </div>
        </div>
    </div>
</div>
-->

</body>
</html>

