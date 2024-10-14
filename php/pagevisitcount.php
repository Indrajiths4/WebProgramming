<?php
    session_start();
    if(isset($_SESSION["visit_count"])) {
        $_SESSION['visit_count']+=1;
    }
    else {
        $_SESSION["visit_count"]=1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website visit counter</title>
</head>
<body>
    <?php
        echo "You have visited this website  ".$_SESSION["visit_count"]. " times.";
    ?>
</body>
</html>