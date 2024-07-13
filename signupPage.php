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
            <div class="logo"><a href="index.html"> <img src="images/sub logo1.png" alt="logo" width="200"></a> </div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <button><a href="signupPage.php">SignUp</a></button>
                <button><a href="loginPage.php">LogIn</a></button>
            </ul>
        </div>
    </nav>
    <br><br><hr>
    <!-- end nav bar -->
    <!-- signup box -->
    <br>
    <div class="signup-box">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form action="signup.php" method="POST">
            <label>Name</label>
            <input type="text" name="Name" placeholder="Enter your name" required />
            <label>St_Address</label>
            <input type="text" name="St_Address" placeholder="Enter your St_Address" required />
            <label>NIC</label>
            <input type="text" name="NIC" placeholder="Enter your NIC" required />
            <label>Course</label>
            <select class="option-box" name="Course" required>
                <option value="">-----Select-----</option>
                <option value="Diploma in Information Technology">Diploma in Information Technology</option>
                <option value="Diploma in Human Resource Management">Diploma in Human Resource Management</option>
            </select>
            <label>Branch</label>
            <select class="option-box" name="Branch" required>
                <option value="">-----Select-----</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Kurunegala">Kurunegala</option>
            </select>
            <br><br>
            <button type="submit">Submit</button>
            <button type="reset">Cancel</button>
        </form>
        <p>
            By clicking the Submit button, you agree to our <br />
            <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>.
        </p>
        <br><br>
    </div>
    <p class="para-2">
        Already have an account? <a href="login.html">Login here</a>
    </p>
    <br><br>
    <!--end of signup box -->
    <!--footer section -->
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
                        <li><b>Week Days: 9:00 AM to 5.00PM</b></li>
                        <br>
                        <li><b>Weekends : 9.00 AM to 3.00PM</b></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contacts</h4>
                    <ul>
                        <li><b>Telephone: </b><a href="#"><b>+94 76 095 7575</b></a></li>
                        <br>
                        <li><b>Email: </b><a href="#"><b>info@imbs.lk</b></a></li>
                        <br>
                        <li><b>St_Address: </b><a href="#"><b>No 21/04, <br> Queen Mary Road, <br> Gampaha, <br> Sri Lanka.</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyrights">
            <br>
            copyright &copy; 2024/25 IMBS Green Campus - All rights reserved <br>
            Developed by Chandisa Randeni
        </div>
    </footer>
    <!--end of footer section -->
</body>
</html>
