<?php
    if(isset($_POST['submit'])) {
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="test";
    $conn =new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "Connected to ".$dbname." established succesfully<br>";
        $name = $_POST["name"];
        $rollno = $_POST["rollno"];
        $sql = "UPDATE student set name='$name' where rollno=$rollno";
        if(mysqli_query($conn, $sql)) {
            echo "Record updated successfully<br><br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        $sql="SELECT * FROM student";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0) {
            echo ".....Roll Number.......Student Name......... <br>";
            while($row = mysqli_fetch_assoc($res)) {
                echo "...........".$row["rollno"].".......................".$row["name"]."...............<br>";
            }
            echo "<br><br>";
        }
        else {
            echo "0 results.";
        }
    } 
}

    if(isset($_POST['delete'])) {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="test"; 
        $conn =new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "Connected to ".$dbname." established succesfully<br>";
        $name = $_POST["name"];
        $rollno = $_POST["rollno"];
        $sql = "delete from student where rollno='$rollno'";
        if(mysqli_query($conn, $sql)) {
            echo "Record deleted successfully<br><br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        $sql="SELECT * FROM student";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0) {
            echo ".....Roll Number.......Student Name......... <br>";
            while($row = mysqli_fetch_assoc($res)) {
                echo "...........".$row["rollno"].".......................".$row["name"]."...............<br>";
            }
            echo "<br><br>";
        }
        else {
            echo "0 results.";
        }
    } 
    }
    
?>


<form action="" method="POST">
    <?php
        echo "Select Rollno  to be edited/deleted : ";
        echo "<select name='rollno' id='rollno'>";
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="test";
        $conn =new mysqli($servername, $username, $password, $dbname);
        $sql="SELECT * FROM student";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0) {
            while($row = mysqli_fetch_assoc($res)) {
                echo "<option  value=".$row["rollno"].">".$row["rollno"]."</option>";
            }
            echo "</select><br><br>";
        }
    ?>
    <label for="name">Enter name to be edited : </label>
    <input type="text" id="name" name="name">
    <br><br>
    <input type="submit" value="Update" name='submit'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Delete" name='delete'>
</form>