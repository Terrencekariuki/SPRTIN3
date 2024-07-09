<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In and Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php 
        include_once("dbconnect.php");
if(isset($_POST["submit"])){
    $phone =$_POST["phone"];
    $name =$_POST["name"];
    $residence = $_POST["residence"];
    $email = $_POST["email"];
    $password = $_POST["password"];

        $sql = "INSERT INTO `clients`(`phone`, `name`, `residence`, `email`,`Password`) 
                        VALUES ('$phone','$name','$residence','$email','$password')";
        
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
        $conn->close();
    ?>
    <div class="container">
    <image  src="images/effel.webp " >
        <div class="form-container sign-up-container">
            <form action="signin.php" method="POST" >
                <h2>Create New Account</h2>
                <input name="phone" type="text" id="phone" placeholder="phone">
                <br><br>
                <input name="name"  type="text" id="name" placeholder="name">
                <br><br>
                <input name="email" type="email" id="Email" placeholder="Email">
                <br><br>
                <input name="residence"  type="text" id="residence" placeholder="residence">
                <br><br>
                <input name="password"  type="password" id="Password" placeholder="Password">
                <br><br>
                <!-- <button  type="submit">Sign Up</button> -->
                <input name="submit" type="submit" value="sign up">
                <br><br>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form id="signInForm" onsubmit="return validateSignIn()">
                <h2>Sign in</h2>
                <br><br>
                <input type="name" id="signInname" placeholder="name">
                <br><br>
                <input type="email" id="signInEmail" placeholder="Email">
                <br><br>
                <input type="password" id="signInPassword" placeholder="Password">
                <br><br>
                <button type="submit">Sign In</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>