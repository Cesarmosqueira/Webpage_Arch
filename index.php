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
    echo "<br>";
    echo '<div id="main_feed">';
        $sqlconn = mysqli_connect("localhost", "osproject",  "1234", "vgames");
        $query = "SELECT * FROM News ORDER BY code_index";
        $cons = mysqli_query($sqlconn, $query) or die ( "WTF!" );
        echo "<table width='35%' aling='center' cellpadding='6' cellspacing='0' bgcolor='skyblue' border='1' >";
            echo "<tr>";
                echo "<th>Index</th>";
                echo "<th>Content </th>";
                echo "<th>Likes</th>";
                echo "<th>Comments</th>";
                echo "<th>Date</th>";
            echo "</tr>";
            while($col = mysqli_fetch_array($cons)){
                echo "<tr>";
                echo "<td align='center' bgcolor='white'>" .$col['code_index']."</td>";
                echo "<td align='center' bgcolor='white'>" .$col['content']."</td>";
                echo "<td align='center' bgcolor='white'>" .$col['likes']."</td>";
                echo "<td align='center' bgcolor='white'>" .$col['comments']."</td>";
                echo "<td align='center' bgcolor='white'>" .$col['date']."</td>";
                echo "</tr>";
            }
        echo "</table>";
    echo '</div><br>';
    mysqli_close( $sqlconn );

    ?>
    <body>
        <button onclick="append()">append a comment field</button>
        <script>
            function append(){
                    document.getElementById("main_feed").innerHTML += `
                    <div id="respond">
                    <h3>Leave a Comment</h3>
                    <form action="post_comment.php" method="post" id="commentform">
                
                    <label for="comment_author" class="required">Your name</label>
                    <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
                
                    <label for="email" class="required">Your email;</label>
                    <input type="email" name="email" id="email" value="" tabindex="2" required="required">
                
                    <label for="comment" class="required">Your message</label>
                    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
                
                    <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
                    <input name="submit" type="submit" value="Submit comment" />
                    </form>
                    </div>
                `;
            }
        </script>
    </body>
</html>

