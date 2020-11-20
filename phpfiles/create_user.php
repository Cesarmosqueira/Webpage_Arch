<?php
    $pass = $_POST["password1"];
    if ($pass == $_POST["password2"]){
        $sqlconn = mysqli_connect("localhost", "osproject",  "1234", "vgames");
        $reps = mysqli_query($sqlconn, "SELECT * FROM Users where username='" .$_POST["username"]. "'");
        $f = false;
        while($c = mysqli_fetch_array($reps)){
            echo "<script>alert('User already exists')</script>";
            $f = true;
        }
        if(!$f){
            mysqli_query($sqlconn, "INSERT INTO Users VALUES(".$_POST["username"].",".$pass.")");
            echo "inserting";
        }
        $mysqli_close($sqlconn);
    }
    //header("Location: /");


?>
