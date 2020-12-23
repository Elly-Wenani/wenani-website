<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="signup-style.css">

</head>

<body>

    <!-- Sign up section -->
    <section>
        <div class="sign-up">
            <div class="form-header">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
            </div>
            <div class="signup-form">
                <form action="dashboard.php">
                    <input type="text" class="firstname" name="firstname" placeholder="First Name" required>
                    <input type="text" class="lastname" name="lastname" placeholder="Last Name" required>
                    <input type="email" name="email" placeholder="Enter Email" required>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    <input type="password" name="password" placeholder="Repeat Password" required>
                    <hr>
                    <p>
                        <input type="checkbox" name="agree" id="agree" required>
                        I have read and agree to the <a href="">Terms of Service.</a>
                    </p>
                    <input type="submit" value="Sign Up">
                </form>
            </div>
            <div class="form-footer">
                <p>Already have an account? <a href="login.php">Sign in.</a></p>
            </div>
        </div>
    </section>

</body>

</html>