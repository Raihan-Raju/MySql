

<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "pos_project"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["btnLogin"])){
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];
    
    // Prepare SQL statement with parameterized query to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Check if credentials are found
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])) {
            $_SESSION["sname"] = $username;
            header("location:dashboard.php");
            exit();
        } else {
            $msg = "Username or Password is incorrect!";
        }
    } else {
        $msg = "Username or Password is incorrect!";
    }
} 

// Close connection
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-image: url("logo pic/img1.png");
            background-repeat: no-repeat;
            background-size: cover;
            padding: 20px;
        }

        .logo {
            margin-bottom: auto; /* Pushes the logo to the top-left corner */
        }

        .container {
            width: 100%;
            max-width: 450px; /* Limiting container width for better readability */
            margin-left: auto; /* Pushes the container to the right */
            background-color: #81cbe9a2;
            border-radius: 30px;
            padding: 20px;
           
            float: right;
            margin: 30px 70px 0px 30px;
        }

        .container h2 {
            margin-bottom: 20px;
            text-align: center; /* Centering the heading */
        }

        .container form {
            display: flex;
            flex-direction: column;
            padding: 10px;
        }

        .container form label {
            margin-bottom: 1px;
        }

        .container form input {
            outline: none;
            padding: 5px;
            margin-bottom: 15px;
            border: 1px solid rgb(133, 129, 129);
            border-radius: 5px;
        }

        button {
            border: none;
            color: #fff;
            font-size: 15px;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
            background: linear-gradient(to right, rgb(76, 0, 255), rgb(0, 217, 255));
        }
        button a{
            color:white;
            text-decoration:none;
        }

        .newUser {
            margin-top: 20px;
            text-align: center;
        }

        .newUser span {
            color: rgb(252, 43, 6);
            cursor: pointer;
        }
        
    </style>
</head>
<body>
    <di v class="logo">
        <h1 class="text-danger">
            <img style="width: 200px;" src="logo pic/logopic.png" alt="">
        </h1>
    </div>

    <div class="container">

         <?php
            echo isset($msg)?$msg:"";
          ?>

        <h2>Login Form</h2>
        <form action="#" method="post" class="form">
            <label for="userId"><span>User name</span></label>
            <input type="text" name="txtUsername" id="userId">
            <label for="password"><span>Password</span></label>
            <input type="password" name="txtPassword" id="password">
            <div>
            <input type="submit" value="Log In" name="btnLogin" />
        </div>
        </form>
        <p class="newUser">
            Not a member? <span>Signup now</span>
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
