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
        // This is will create problem if we do not select all options
        // echo $_REQUEST["check1"] . "<br>";
        // echo $_REQUEST["check2"] . "<br>";
        // echo $_REQUEST["check3"] . "<br>";

        // isset function is used to check an array has element or not. 
       echo "<b>You Selected : </b><br>";
        if(isset($_REQUEST["check1"])) {
            echo $_REQUEST["check1"] . "<br>";
        }
        if(isset($_REQUEST["check2"])) {
            echo $_REQUEST["check2"] . "<br>";
        }
        if(isset($_REQUEST["check3"])) {
            echo $_REQUEST["check3"] . "<br>";
        }
    ?>
</body>
</html>