<?php
    if($_POST["user"] != "-"){
        $sqlconn = mysqli_connect("localhost", "osproject",  "1234", "vgames");
        $query = 'INSERT INTO Comment(content, user, date, code_index) VALUES("'.$_POST['comment']. '", "SELENITA", "' .date("m"). '-'.date("d").'-'.date("Y"). '" , '.$_POST['current'].')';
        $cons = mysqli_query($sqlconn, $query) or die ( "WTF!" );
        mysqli_close($sqlconn);
    }
    header("Location: /")
?>
