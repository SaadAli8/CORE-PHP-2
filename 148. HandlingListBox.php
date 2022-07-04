<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekyShows</title>
</head>
<body>    
    <?php
        if(isset($_REQUEST["location"])) {
            foreach ($_REQUEST["location"] as $place) {
                echo $place . "<br>";
            }
        }
        
    ?>
</body>
</html>