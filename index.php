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
    echo "<div id="main_feed">
            <h1>Idk</h1>
            </div>
    "
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

