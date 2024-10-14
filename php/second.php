<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Calculate Average,largest and sum of squares of three numbers</h1>
    <form action="" method="POST">
        <label for="number1">Enter number 1 : </label>
        <input type="number" id="number1" name="number1">
        <label for="number2">Enter number 2 : </label>
        <input type="number" id="number2" name="number2">
        <label for="number3">Enter number 3 : </label>
        <input type="number" id="number3" name="number3">
    </form>
    <br>
    <br>
    <h3>Result</h3> -->
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
    
        // $string=$_POST['string'];
        // function count_word($string) {
        //     print("'$string' has ".str_word_count($string)." words");
        // }
        // count_word($string);

        $string1="apple";
        $string2="banana";
        $result=strcmp($string1,$string2);
        if($result < 0) {
            print("$string1 precedes $string2");
        }
        else if($result==0) {
            print("$string1 equals $string2");
        }
        else {
            print("$string1 greater than $string2");
        }
    
    ?>
</body>
</html>