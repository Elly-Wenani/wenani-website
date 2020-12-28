<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="signup-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

<section>
        <!-- Bellow topmost header section -->
        <div class="topnav" id="myTopnav">
            <a href="/webprac/index.php">Home</a>
            <a href="">Store</a>
            <a href="">Domain</a>
            <a href="">Hosting</a>
            <a>Affiliate</a>
            <a href="">Careers</a>
            <a href="/webprac/pages/contact.html">Contact Us</a>
            <a href="javascript:void(0);" class="right-side" onclick="myDFunction()">More<i
                    class="fa fa-caret-down"></i></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>

            <!-- <div class="dropdown" id="mydropdown">
                <div>
                    <a href="">Register</a>
                    <a href="">Login</a>
                    <a href="">Profile</a>
                </div>
                <div>
                    <a href="">Register</a>
                    <a href="">Login</a>
                    <a href="">Profile</a>
                </div>
            </div> -->
        </div>
    </section>

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

    <!-- Footer section -->
    <footer>
        <div class="footer-content">
            <div class="left box">
                <h2>About Us</h2>

                <ul class="content">
                    <p>Lorem ipsum dolor sit, <br>amet consectetur adipisicing elit.<br> Maxime adipisci unde<br>ipsum
                        fugit aliquid voluptatum, <br>quos, pariatur molestias ullam, <br>dolores doloribus repellendus
                        <br>blanditiis et atque.
                    </p>
                </ul>
            </div>

            <div class="left-center box">
                <h2>Quick Links</h2>
                <ul class="content">
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Web Design</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Software Development</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Networking</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Application Development</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Web Hosting</a>
                </ul>
            </div>

            <div class="right-center box">
                <h2>Contact Us</h2>
                <ul class="content">
                    <a i class="fa fa-angle-double-right" aria-hidden="true"></i>Lorem ipsum</a>
                    <a i class="fa fa-angle-double-right" aria-hidden="true"></i>info@example.com</a>
                    <a i class="fa fa-angle-double-right" aria-hidden="true"></i>+254716633280</a>
                    <a i class="fa fa-angle-double-right" aria-hidden="true"></i> +254712345678</a>
                    <a i class="fa fa-angle-double-right" aria-hidden="true"></i> Application Development</a>
                </ul>
            </div>

            <div class="right box">

                <h2>Address</h2>

                <ul class="content">
                    <a>P.O Box 2364,</a>
                    <a>Kimbo House,</a>
                    <a>Kitange Street</a>
                    <a>Nairobi,</a>
                    <a>Kenya</a>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2020 | Designed by Elly Wenani</p>
        </div>
    </footer>
    <script src="js/script.js"></script>

</body>

</html>