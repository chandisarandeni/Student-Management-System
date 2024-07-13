<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMBS web project</title>

    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <!-- nav bar -->
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="index.html">
                    <img src="images/sub logo1.png" alt="logo" width="200">
                </a>
            </div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <hr>
    <!-- end nav bar -->

    <!-- login box -->
    <br>
    <div class="login-box">
        <h1>Admin Login</h1>
        <form action="adminLogin.php" method="POST">
            <label for="adminID">Admin ID</label>
            <input type="text" id="" name="adminID" required>
            <label for="Password">Password</label>
            <input type="password" id="" name="adminPass" required>
            <br><br><br>
            <button type="submit">Submit</button>
            <button type="reset">Cancel</button>
        </form>
    </div>
    <p class="para-2">
        Not have an account? <a href="signup.html">Sign Up Here</a>
    </p>
    <br><br>
    <!-- end of login box -->

    <!-- footer section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>QUICK CONTACT</h4>
                    <form action="" class="quick-contact">
                        <input type="text" name="name" placeholder="Your Name" class="quick-contact-name">
                        <textarea name="Message" placeholder="Your Message" class="quick-contact"></textarea>
                        <button type="submit"><b>Submit</b></button>
                    </form>
                </div>
                <div class="footer-col">
                    <h4>Available Times</h4>
                    <ul>
                        <li><b>Week Days: 9:00 AM to 5:00 PM</b></li>
                        <br>
                        <li><b>Weekends: 9:00 AM to 3:00 PM</b></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contacts</h4>
                    <ul>
                        <li><b>Telephone: </b><a href="tel:+94760957575"><b>+94 76 095 7575</b></a></li>
                        <br>
                        <li><b>Email: </b><a href="mailto:info@imbs.lk"><b>info@imbs.lk</b></a></li>
                        <br>
                        <li><b>Address: </b><a href="#"><b>No 21/04, <br>Queen Mary Road, <br>Gampaha, <br>Sri Lanka.</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyrights">
            <br>
            copyright &copy; 2024/25 IMBS Green Campus - All rights reserved
            <br>
            Developed by Chandisa Randeni
        </div>
    </footer>
    <!-- end of footer section -->
</body>
</html>