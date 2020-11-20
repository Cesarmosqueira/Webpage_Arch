<?php
    if($_POST["user"] != "-"){
        $sqlconn = mysqli_connect("localhost", "osproject",  "1234", "vgames");
        $query = 'UPDATE News set likes = likes+1 where code_index=' .$_POST['current'].' ' ;
        $cons = mysqli_query($sqlconn, $query) or die ( "WTF!" );
        mysqli_close($sqlconn);
    }
    header("Location: /")
?>
