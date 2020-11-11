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
        <?php
            $conn = mysqli_connect("localhost", "osproject", "1234", "vgames");
            if ($conn-> connect_error) {
                die("Couldn't connect: ".$conn->connect_error);
            }
            $sql = "SELECT Username, Email, Birthdate from Users";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0){
                while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo    "<td>".$row["Username"]. "</td>";
                        echo    "<td>".$row["Email"] . "</td>";
                        echo    "<td>".$row["Birthdate"] . "</td>";
                        echo "</tr>";
                }
                echo "</table>"
            }
            else {
                echo "Emtpy";
            }
            $conn-> close();
        ?>
    </body>
</html>

