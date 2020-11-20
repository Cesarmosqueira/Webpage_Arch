<?php
    $pass = $_POST["password1"];
    $f = false;
    if ($pass == $_POST["password2"]){
        $sqlconn = mysqli_connect("localhost", "osproject",  "1234", "vgames");
        $reps = mysqli_query($sqlconn, "SELECT * FROM Users where username='" .$_POST["username"]. "'");
        while($c = mysqli_fetch_array($reps)){
            echo "<script>alert('User already exists')</script>";
            $f = true;
        }
        if(!$f){
            mysqli_query($sqlconn, "INSERT INTO Users VALUES('".$_POST["username"]."','".$pass."')");
        }
        $mysqli_close($sqlconn);
    }
    else{
        //echo "<script>alert('Passwords dont match')</script>";
        //header("Location: /auxiliars/registerfield.html");
        //die();

    }
    if(!$f){
        //echo "<script>alert('Registered Succesfully')</script>";
        //header("Location: /");
        //die();
    }
    else {
        //echo "<script>alert('Error')</script>";
        //header("Location: /auxiliars/registerfield.html");
        //die();

    }
    header("Location: /");
?>
