<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        $cars=array("BMW","Porsche","audi");
        for($i=0;$i<count($cars);$i++) {
            print($cars[$i]."<br>");
        }
        print("<br>");
        foreach($cars as $x) {
            print($x."<br>");
        }
        print("<br>");
        $ages=array("Peter"=>32,"Brian"=>24);
        foreach($ages as $ageperson=>$agevalue) {
            print("$ageperson=>$agevalue<br>");
        }
        print("<br>");
        $mon=array("January"=>"first","February"=>"second","March"=>"third","April"=>"fourth","May"=>"fifth","June"=>"sixth");
        foreach($mon as $month=>$number) {
            print("$month is the $number month.<br>");
        }
        print("<br>");
        $fruits=array("Orange","Guava","Apple","Banana");
        sort($fruits);
        foreach($fruits as $fruit) {
            print($fruit."<br>");
        }
        print("<br>");
        rsort($fruits);
        foreach($fruits as $fruit) {
            print($fruit."<br>");
        }
        print("<br>");
        ksort($mon);
        foreach($mon as $month=>$number) {
            print("$month is the $number month.<br>");
        }
        print("<br>");
        asort($mon);
        foreach($mon as $month=>$number) {
            print("$month is the $number month.<br>");
        }
        print("<br>");
    ?>
</body>
</html>
