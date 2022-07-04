<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekyShows</title>
</head>
<body>    
    Your Date: <br>
    <?php
      $new_date = date('d-m-Y', strtotime($_POST['det']));
      echo $new_date;
    ?>
</body>
</html>