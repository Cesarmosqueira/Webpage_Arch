<!DOCTYPE html>
<html> 

    <h1>Register:</h1>
 
    <body>
        
        <b>Username:</b>
        <p><input type="text" placeholder="Username" id="username_input"></p>
        <b>Email:</b>
        <p><input type="text" placeholder="Email" id="email_input"></p>
        <b>Birth date::</b>
        <p><input type="date" id="birth_input" name="Birth date"
            min="1969-01-01" max="2020-12-31"></p>
            <?php
                if(array_key_exists('submit', $POST)){
                    $servername = "localhost";
                    $username = "osproject";
                    $password = "peterchupapinga";
                    $dbname = "vgames";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      echo "<script type='text/javascript'>alert('Connection Failed');</script>";
                      die("Connection failed: " . $conn->connect_error);
                    }
                    echo "<script type='text/javascript'>alert('Connection OK');</script>";

                    $givenuser = $_GET['username_input'];
                    $givenmail = $_GET['email_input'];
                    $givenbirth = $_GET['birth_input'];
                    $sql = "INSERT INTO  Users(Username, Email, Birthdate)
                    VALUES ($givenuser, $givenmail, $givenbirth)";
                    if ($conn->query($sql) === TRUE) {
                      echo "New record created successfully";
                    } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    echo "<script type='text/javascript'>alert('Process OK');</script>";

                    $conn->close();
                }
            
            ?>
        <p><button type="button" name="submit";>Register!</button></p>
      
    </body>
</html>
