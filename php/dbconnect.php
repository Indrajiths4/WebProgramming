<?php
if (isset($_POST['submit'])) {
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="test";
    $conn =new  mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "Connected to ".$dbname." established succesfully<br>";
        $rollno = $_POST["rollno"];
        $name = $_POST["name"];
        $sql = "INSERT INTO student (name) VALUES ('$name')";
        if(mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } 
}
?>
<form method="post">
    Roll No: <input type="number" name="rollno"><br><br>
    Name: <input type="text" name="name"><br><br>
    <input type="submit" value="Insert" name="submit">
</form>