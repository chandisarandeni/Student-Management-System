<?php
    session_start();
    if (!isset($_SESSION['loggedin']))
    {
        header('Location: login.php');
        exit();
    }
    $user = $_SESSION['user'];
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
			<div class="logo"><a href="index.html"> <img src="images/sub logo.png" alt="logo" width="200"></a> </div>
			<ul>
				<li><a href="index.html">Home</a></li>
                <li><a href="#">Courses</a></li>
				<li><a href="#">About</a></li>
				<li><a href="contact.html">Contact</a></li>
				<!--<button><a href="signup.html">SignUp</a></button>-->
                <!--<button><a href="login.html">LogIn</a></button>-->
			</ul>
		</div>
	</nav>
    <!--End nav bar-->
    
    <br>
    <br>
    <hr>

    <!--Profile details section-->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .profile-box {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
        }
        .profile-box h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-box .profile-item {
            margin-bottom: 10px;
        }
        .profile-box .profile-item label {
            font-weight: bold;
            display: block;
        }
        .editbtn{
            size: 50px,50px;
        }
    </style>


            <div class="profile-box">
                <h1>My Profile</h1>
                <div class="profile-item">
                    <label>Name:</label>
                    <span id="profile-name"><?php echo htmlspecialchars($user['Name']) ?></span>
                </div>
                <div class="profile-item">
                    <label>Street Address:</label>
                    <span id="profile-address"><?php echo htmlspecialchars($user['St_Address']) ?></span>
                </div>
                <div class="profile-item">
                    <label>NIC:</label>
                    <span id="profile-nic"><?php echo htmlspecialchars($user['NIC']) ?></span>
                </div>
                <div class="profile-item">
                    <label>Course:</label>
                    <span id="profile-course"><?php echo htmlspecialchars($user['Course']) ?></span>
                </div>
                <div class="profile-item">
                    <label>Branch:</label>
                    <span id="profile-branch"><?php echo htmlspecialchars($user['Branch']) ?></span>
                </div>
                <div class="editbtn">
                    <button><a href="myProfileEdit.php">Edit</a></button>
                </div>
                
            </div>

    <!--End of the profile details section-->

    

<!--footer section -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>QUICK CONTACT</h4>
                <form action="" class="quick-contact">
                    <input type="text" name="name" placeholder="Your Name" class="quick-contact-name">
                    <textarea name="Message" placeholder="Your Message" class="quick-contact"></textarea>
                    <button type="submit"> <b>Submit</b> </button>
                </form>
            </div>
            <div class="footer-col">
                <h4>Available Times</h4>
                <ul>
                    <li><b>Week Days: 9:00 AM to 5.00PM</b></a></li>
                    <br>
                    <li><b>Weekends : 9.00 AM to 3.00PM</b></a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>contacts</h4>
                <ul>
                    <li><b>Telephone: </b><a href="#"><b>+94 76 095 7575</b></a></li> 
                    <br>
                    <li><b>Email : </b><a href="#"><b>info@imbs.lk</b></a></li>
                    <br>
                    <li><b>Address : </b> <a href="#"><b>No 21/04, <br>
                    Queen Mary Road, <br>
                    Gampaha, <br>
                    Sri Lanka. </b> </a>
                    </li>
                </ul>
            </div>
           
            </div>
        </div>

        <div class="copyrights">
            <br>
            copyright &copy; 2024/25    IMBS Green Campus - All rights reserved <br>
            Developed by Chandisa Randeni
        </div>
    </div>
</footer>
<!--end of footer section -->


</body>
</html>