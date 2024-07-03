<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In and Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container sign-up-container">
            <form id="signUpForm" onsubmit="return validateSignUp()">
                <h2>Create New Account</h2>
                <input type="text" id="Username" placeholder="Username">
                <br><br>
                <input type="email" id="Email" placeholder="Email">
                <br><br>
                <input type="password" id="Password" placeholder="Password">
                <br><br>
                <button type="submit">Sign Up</button>
                <br><br>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form id="signInForm" onsubmit="return validateSignIn()">
                <h2>Sign in</h2>
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