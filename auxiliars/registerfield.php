<!DOCTYPE html>
<html>
    <body>
        <link rel="stylesheet" href="logincss.css">
        <div class="row">
            <div class="column">
                <div class = "login">
                <h3>Log In:</h3>
                <form id ="loginform" action="../phpfiles/validate_login.php">
                    <p><input type="text" name "username" placeholder="Username:"></p>
                    <p><input type="password" name "password" placeholder="Password:"></p>
                    <p><input type="submit" value="Log In!"></p>
                </form>
                </div>
            </div>
            <div class="column">
                <div class = "signup">
                <h3>Sign Up:</h3>
                <form id ="loginform" action="../phpfiles/create_user.php">
                    <p><input type="text" name "username" placeholder="Create Username:"></p>
                    <p><input type="password" name "password" placeholder="Create Password:"></p>
                    <p><input type="password" name "password" placeholder="Repeat Password:"></p>
                    <p><input type="submit" value="Register!"></p>
                </form>
                </div>
            </div>
        </div>      
    </body>
</html>
