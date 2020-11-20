

<?php
    $ip = getenv("REMOTE_ADDR");
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sqlconn = mysqli_connect("localhost", "osproject", "1234", "vgames");
    
    $qget_user = "SELECT * FROM Users WHERE username='".$username."'";
    
    $rows = mysqli_query($sqlconn, $qget_user);
    $f = 0;
    while( $c = mysqli_fetch_array($rows)){
        $f = 1;
        break;
    }
    if($f == 1){
        // create session 
        $create_s = "INSERT INTO Session VALUES('".$ip."','".$username."')";
        mysqli_query($sqlconn, $create_s);
        header("Location: /");
        die();
    }
    else{
        echo "<script>alert('User doesnt exist')</script>";
        header("Location: /auxiliars/registerfield.html");
        die();
   }
?>
