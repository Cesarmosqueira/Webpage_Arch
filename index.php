<!DOCTYPE html>
<html> 
    <h1>Register:</h1>
    <body>
        <form id = "theform" class ="form" method ="post" action = "submit.php">
        <b>Username:</b>
        <p><input type="text" name = "Username" placeholder="Username" id="username_input"></p>
        <b>Email:</b>
        <p><input type="text" name = "Email" placeholder="Email" id="email_input"></p>
        <b>Birth date::</b>
        <p><input type="date" id="birth_input" name="Birthdate"
            min="1969-01-01" max="2020-12-31"></p>
        <button type = "submit">Submit!</button>
        </form>
        <br>
        <form method="post" action="display.php">
            <button type="submit">Show users</button>
        </form>
    </body>
</html>

