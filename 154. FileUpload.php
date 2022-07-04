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
        // print_r($_FILES["myfile"]);
        // echo $_FILES["myfile"]["name"] . "<br>";         // File Name
        // echo $_FILES["myfile"]["type"] . "<br>";         // File Type
        // echo $_FILES["myfile"]["tmp_name"] . "<br>";     // Server side temp file 
        // echo $_FILES["myfile"]["error"] . "<br>";        // Number of error
        // echo $_FILES["myfile"]["size"] . "<br>";         // File Size
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "upload/".$_FILES["myfile"]["name"]))
        {
            echo "Uploaded Successfully";
        }
        else
        {
            echo "Upload Failed...";
        }
    ?>
</body>
</html>