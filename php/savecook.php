<?php 
        if(isset($_POST['submit'])) {
            define("FIVE_DAYS",60*60*24*5);
            setcookie(  "username", $_POST['username'], time()+FIVE_DAYS );
            setcookie(  "text", $_POST['text'], time()+FIVE_DAYS );
            $name= $_COOKIE["username"];
            $text= $_COOKIE["text"];
            echo "Cookies have been set";
            echo "Username: $name";
            echo  "Text: $text";

        }
?>