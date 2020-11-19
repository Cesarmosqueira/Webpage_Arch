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
        <?php
            $username = "-";
            $smallconn = mysqli_connect("localhost", "osproject",  "1234", "vgames");
            $addr = getenv("REMOTE_ADDR");
            $q = "SELECT 1 FROM Session WHERE ip='".$addr."'";
            $cons = mysqli_query($smallconn, $q);
            mysqli_close($smallconn);
            echo "<br>";
            if($currentuser = mysqli_fetch_array($cons)){
                $username = currentuser["username"];
                echo "<h3>".$username."<h3>";
                echo '<form method="post" action="phpfiles/logout.php">';
                    echo '<input type="submit" value="log out">';
                echo '</form>';
            }
            else{
                echo '<form method="post" action="phpfiles/login.php">';
                    echo '<input type="hidden" name="addr" value="'.$addr.'">';
                    echo '<input type="submit" value="Login here">';
                echo '</form>';
            }
        ?>
    </div>
    <?php
    echo "<h4>".$var."</h4>";
    echo '<link rel="stylesheet" href="main.css">';
    echo '<div id="main_feed">';
        $sqlconn = mysqli_connect("localhost", "osproject",  "1234", "vgames");
        $query_News = "SELECT * FROM News ORDER BY code_index";
        $cons_News = mysqli_query($sqlconn, $query_News) or die ( "WTF!" );
        $query_Comment = "SELECT * FROM Comment ORDER BY code_index";

        while($col = mysqli_fetch_array($cons_News)){
        echo "<br><div class='card'>";
            echo "<div class ='postheader'>";
                echo "<h2>" .$col["title"]. " - " .$col["code_index"]."</h2>";
                echo "<h5>" .$col["description"]. "<br>" .$col["date"]. "</h5>";
                echo '<img src="'.$col["picture"].'" width="100" height="100">';
            echo "</div><div class ='postcontent'>";
                echo $col["content"];
                echo "<br>";
                echo '<form id="likes" action="phpfiles/plike.php" method="post">';
                    echo '<input type="hidden" name="current" value="' .$col["code_index"]. '">';
                    echo '<button type="submit"> Like='.$col["likes"].'</button>';
                    echo '</form>';
                    echo '<br>';
            echo "<div class='allcomments'>";
                $cons_Comment = mysqli_query($sqlconn, $query_Comment) or die ( "WTF!" );
                while($comment=mysqli_fetch_array($cons_Comment )){
                    if($comment["code_index"] == $col["code_index"]){
                        echo '<div class="singlecomment">';
                            echo '('.$comment["date"]. ') <b>'.$comment["user"]. '</b> said:<br>';
                            echo $comment["content"];
                            echo "<br>"; 
                        echo '</div>';
                    }
                }
                echo '<br>';
                echo '<form id="send_comment" action="phpfiles/send_comment.php" method="post">';
                    echo '<input type="hidden" name="current" value="' .$col["code_index"]. '">';
                    echo '<input type="text" id="comment" name="comment">  ';
                    echo '<input type="submit" value="Send!">';
                echo '</form>';
            echo '</div></div>';
        echo "</div>";
        }
    echo '</div><br>';
    mysqli_close( $sqlconn );
    ?>
</html>

