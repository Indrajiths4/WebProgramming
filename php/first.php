<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Number of word checker</h1>
    <form action="" method="POST">
        <label for="text">Enter a sentence : </label>
        <input type="text" id="string" name="string" required>
        <button type="submit" name="Submit">Check</button>
    </form>
    <?php
        // $num= $_POST['number'];
        // print($num." ");
        // function isprime($num) {
        //     for($i=2;$i<=$num/2;$i++) {
        //         if($num%$i==0) {
        //             print("Not a Prime number");
        //             return;
        //         }
        //     }
        //     if($num<2) {
        //         print("Not Prime Number");
        //     }
        //     else {
        //         print("Prime number");
        //     }
        // }
        // isprime($num);

        $string=$_POST['string'];
        function count_word($string) {
            print("'$string' has ".str_word_count($string)." words");
        }
        count_word($string);

    ?>
</body>
</html>
