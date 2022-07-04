<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekyShows</title>
</head>

<body>
    <!-- HTML inside PHP -->
    <!-- <?php 
        if($_POST["pass"] == "Hello") {
            echo "Your Password is: <span style='color: red;'>" .  $_POST["pass"] . "</span>";
        }
        else {
            echo "You have entered <b>Wrong Password</b>";
        }
    ?> -->

        <!-- PHP inside HTML -->
    <?php 
    if($_POST["pass"] == "Hello") {?>
        Your Password is: <span style='color: red;'> <?php echo $_POST["pass"]; ?> </span>
    <?php } else { ?>
        <span>You have Entered <b>Wrong Password</b></span>
    <?php } ?>

</body>

</html>