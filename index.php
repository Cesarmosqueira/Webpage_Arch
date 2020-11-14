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
    <?php
    echo '<link rel="stylesheet" href="main.css">';
    echo '<div id="main_feed">';
        $sqlconn = mysqli_connect("localhost", "osproject",  "1234", "vgames");
        $query = "SELECT * FROM News ORDER BY code_index";
        $cons = mysqli_query($sqlconn, $query) or die ( "WTF!" );
        while($col = mysqli_fetch_array($cons)){
            echo "<br><div class='card'>";
            echo "<div class ='postheader'>";
                echo "<h2>" .$col["title"]."</h2>";
                echo "<h5>" .$col["description"]. "<br>" .$col["date"]. "</h5>";
                echo '<img src="'.$col["picture"].'" width="100" height="100">';
            echo "</div><div class ='postcontent'>";
                echo $col["content"];
                echo "<br>";
                echo '<form id="likes" action="plike.php" method="post">'
                    echo '<input type="hidden" id="current" value="' .$col["likes"]. '">';
                    echo '<button type="submit"> Like='.$col["likes"].'</button>';
                echo '</form>'
                echo '<form id="comment" action="comment.php" method="post">'
                    //echo "Number of comments: " .$col["comments"]. "<br>";
                    echo '<button type="submit"> Comment='.$col["comments"].'</button>';
                echo '</form>'
            echo "</div>";
            echo "</div>";
        }
    echo '</div><br>';
    mysqli_close( $sqlconn );
    ?>
</html>

