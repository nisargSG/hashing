<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["password"])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db="06jan";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$db);

        $email = $_POST["email"]; //nisarg@gmail.com
        $pass = md5($_POST["password"]); ///nisarg@123 -> ee35bb80dcb56193d715283448857849


        $result = $conn->query("SELECT * FROM users where email ='$email' and password ='$pass'");

        if($result->num_rows>0){
            echo("correct");
        }
        else{
            echo("invalid credentials");
        }
       

    }

    ?>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <input type="text" placeholder="email" name="email" />
        <input type="text" placeholder="password" name="password" /> 
        <button>login</button>

    </form>

    
</body>
</html>