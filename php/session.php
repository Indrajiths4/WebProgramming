<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php"><input type="button" value="logout"></a>
    <?php 
        $_SESSION["visit_count"]=0;
    ?>
    <a href="pagevisitcount.php">Visit website</a>
</body>
</html>