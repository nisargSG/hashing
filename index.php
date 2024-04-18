<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["password"])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db="06jan";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$db);

        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $pass = md5($_POST["password"]); ///nisarg@123 -> ee35bb80dcb56193d715283448857849


        $conn->query("INSERT INTO users (name,phone,email,password) VALUES('$name','$phone','$email','$pass')");

       

    }

    ?>


    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <input type="text" placeholder="name" name="name" />
        <input type="text" placeholder="phone" name="phone" />
        <input type="text" placeholder="email" name="email" />
        <input type="text" placeholder="password" name="password" />
        <button>create account</button>

    </form>

</body>

</html>