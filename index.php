<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elly Wenani</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <section>

        <!-- Top most header section -->
        <div class="toptop">
            <div class="toptop-left">
                <a>Elly Wenani</a>
            </div>

            <div class="toptop-right">
                <button type="button" class="btnright" id="myBtn">Login</button>
            </div>
        </div>

        <!-- Bellow topmost header section -->
        <div class="topnav" id="myTopnav">
            <a href="" class="active">Home</a>
            <a href="">Store</a>
            <a href="">Domain</a>
            <a href="">Hosting</a>
            <a href="">Affiliate</a>
            <a href="">Careers</a>
            <a href="contact.php">Contact Us</a>
            <a href="" class="right-side">Account<i class="fa fa-caret-down"></i></a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </section>

    <section class="mainpage">
        <div class="foundation">
            <h1>Elly Wenani</h1>
            <p>Text here, text here. Most developers like using Lorem Ipsum. Text here, text here.<br>
                Most developers like using Lorem Ipsum. Text here, text here.<br>
                developers like using Lorem Ipsum.</p>

            <div class="sbtnhome">
                <button class="btnreadmore">Read More</button>
                <button class="btngetstarted">Get Started</button>
            </div>
        </div>
    </section>

    <!-- Code for modal -->
    <section>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="hlogin">Login</h4>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form role="form">
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
                                <input type="email" class="form-control" id="usrname" placeholder="Enter email"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                <input type="password" class="form-control" id="psw" placeholder="Enter password"
                                    required>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" checked>Remember me</label>
                            </div>
                            <button type="submit" class="btnloglog">Login</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <p>Not a member? <a href="#">Sign Up</a></p>
                        <p>Forgot <a href="#">Password?</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer>

        <div class="footer-content">
            <div class="left box">
                <img src="images/kenya.png" alt="Logo">

                <div class="socials">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>

            <div class="center box">

                <h2>Services</h2>

                <ul class="content">
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Web Design</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Software Development</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Networking</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Application Development</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Web Hosting</a>
                </ul>

            </div>

            <div class="right box">

                <h2>Address</h2>

                <ul class="content">
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> P.O Box 2364</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Nairobi, Kitange Street</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Kimbo House</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> New Demin</a>
                    <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Kenya</a>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>All rights reserved &copy; 2020</p>
        </div>
    </footer>

</body>
<script src="js/javascript.js"></script>

</html>