<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
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

    <div class="container">
        <form action="/dashboard.php">
            <div class="row">
                <h2 style="text-align:center">Login</h2>
                <div class="vl">
                    <span class="vl-innertext">or</span>
                </div>

                <div class="col">
                    <a href="#" class="fb btn">
                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                    </a>
                    <a href="#" class="twitter btn">
                        <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                    </a>
                    <a href="#" class="email btn"><i class="fa fa-google fa-fw">
                        </i> Login with Email
                    </a>
                </div>

                <div class="col">
                    <div class="hide-md-lg">
                        <p>Or sign in manually</p>
                    </div>

                    <input type="email" name="email" placeholder="Enter Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" value="Login">
                </div>

            </div>
        </form>
    </div>

    <div class="bottom-container">
        <div class="row">
            <div class="col">
                <a href="sign-up.php" class="btn">Sign up</a>
            </div>
            <div class="col">
                <a href="#" class="btn">Forgot password?</a>
            </div>
        </div>
    </div>

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