<?php
    $ip = "localhost";
    $db = "vgames";
    $dbuser = "osproject";
    $dbpassword = "1234";
    
    $conn = mysqli_connect($ip, $dbuser, $dbpassword, $db);
    if($conn->connect_error){
        die("<b>Connection failed:</b><br>" .$conn->connect_error);       
    }
    $Username = $_POST["Username"];
    $Email = $_POST["Email"];
    $Birthdate = $_POST["Birthdate"];
    if($Username==NULL or $Email==NULL or $Birthdate==NULL){}
	else { 
        $query= "INSERT INTO Users (Username, Email, Birthdate) VALUES ('$Username','$Email','$Birthdate')";
	    mysqli_query($conn,$query);
    }
    mysqli_close($conn);
    header("location: http://40.76.136.125/");
?>
