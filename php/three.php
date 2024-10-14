<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Search pattern in String</h1>
    <form action="" method="POST">
        <label for="string1">Enter String : </label>
        <input type="text" id="string1" name="string1">
        <label for="string2">Enter Pattern : </label>
        <input type="text" id="string2" name="string2">
        <input type="submit" value="submit" name="submit" id="submit">
    </form>
    <br>
    <br>
    <h3>Result</h3> -->
    <?php
        // if(isset($_POST['submit'])) {
        //     $string=$_POST['string1'];
        //     $pattern="/".$_POST['string2']."/";
        //     if(preg_match($pattern,$string)) {
        //         print("$pattern found in $string");
        //     }
        //     else {
        //         print("$pattern not found in $string");
        //     }
        // }

        $string="PHP is HyperText PreProcessor";
        if(preg_match("/^PHP/",$string)) {
            print("'$string' starts with PHP");
        }
        else {
            print("'$string' does not start with PHP");
        }
    ?>
</body>
</html>