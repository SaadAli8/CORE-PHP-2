<?php
        if(isset($_POST['name']) && ($_POST['roll'])){
            echo $_POST['name'] . "<br>";
            echo $_POST['roll'] . "<br>";
        }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekyShows</title>
</head>
<body>
    <form action="" method="POST">
       Name: <input type="text" name="name"> <br><br>
       Roll: <input type="text" name="roll"> <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>