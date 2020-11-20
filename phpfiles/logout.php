<?php
    $sqlconn = mysqli_connect("localhost", "osproject",  "1234", "vgames");
    $query = "DELETE FROM Session WHERE ip='".getenv("REMOTE_ADDR")."'";
    $cons = mysqli_query($sqlconn, $query) or die ( "WTF!" );
    mysqli_close($sqlconn);
    header("Location: /");
?>
