<!DOCTYPE html>
<html> 
    <link rel="stylesheet" href="main.css">
    <div class ="menu">
        <h1><a href="index.html">Newsletter videogames</a></h1>
        <ul>
            <li><a href="index.html">Noticias</a></li>
            <li><a href="index.html">Reviews</a></li>
            <li><a href="index.html">Mas</a></li>
        </ul>
    </div>
    <div class='loginfield'>
        <h3>Selenita<h3>
        <form method="post" action="">
            <input type="submit" value="log out">
        </form>
    </div>
    <?php
    echo '<link rel="stylesheet" href="main.css">';
    echo '<div id="main_feed">';
        $sqlconn = mysqli_connect("localhost", "osproject",  "1234", "vgames");
        $query_News = "SELECT * FROM News ORDER BY code_index";
        $cons_News = mysqli_query($sqlconn, $query_News) or die ( "WTF!" );
        $query_Comment = "SELECT * FROM Comment ORDER BY code_index";
        $cons_Comment = mysqli_query($sqlconn, $query_Comment) or die ( "WTF!" );

        while($col = mysqli_fetch_array($cons_News)){
            echo "<br><div class='card'>";
            echo "<div class ='postheader'>";
                echo "<h2>" .$col["title"]."</h2>";
                echo "<h5>" .$col["description"]. "<br>" .$col["date"]. "</h5>";
                echo '<img src="'.$col["picture"].'" width="100" height="100">';
            echo "</div><div class ='postcontent'>";
                echo $col["content"];
                echo "<br>";
                echo '<form id="send_comment" action="phpfiles/send_comment.php" method="post">';
                    echo '<input type="text" id="comment" name="comment"><br>' 
                    echo '<input type="submit" value="Send!">'
                echo '</form>';
                echo '<form id="likes" action="phpfiles/plike.php" method="post">';
                    echo '<input type="hidden" name="current" value="' .$col["code_index"]. '">';
                    echo '<button type="submit"> Like='.$col["likes"].'</button>';
                echo '</form>';
            echo "</div>";
            echo "</div>";
        }
    echo '</div><br>';
    mysqli_close( $sqlconn );
    ?>
</html>

