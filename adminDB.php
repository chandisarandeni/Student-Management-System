<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    //header('Location: login.php');
    //exit();
}

include 'connection.php';

$student = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NIC = $_POST['NIC'];

    $stmt = $conn->prepare("SELECT * FROM student_data WHERE NIC = ?");
    $stmt->bind_param("s", $NIC);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();
}

if ($student) {
    // Set cookie with NIC value
    setcookie('NIC', $student['NIC'], time() + (86400 * 30), "/"); // 86400 = 1 day
}

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
				<!--<button><a href="signup.html">SignUp</a></button>-->
                <!--<button><a href="login.html">LogIn</a></button>-->
			</ul>
		</div>
	</nav>
    <!--End nav bar-->
    
    <br>
    <br>
    <hr>

    <!-- Start of the Search Bar -->
    <style>
        .search-container {
            margin: 2% 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .search-container form {
            display: flex;
            width: 450px;
        }
        .search-container input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
        }
        .search-container button {
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            border: 1px solid #ccc;
            border-left: none;
            border-radius: 0 4px 4px 0;
        }
    </style>

    <form class="profile-box" action="" method="POST">
        <div class="search-container">
            <input type="text" name="NIC" placeholder="Search | Enter the Student NIC Number" required>
            <button type="submit">Search</button>
        </div>
    </form>

    <!-- Start of the profile details view section -->
    <style>
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
        .profile-box .profile-item span {
            display: block;
        }
        .editbtn {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .editbtn button a {
            text-decoration: none;
            color: inherit;
        }
    </style>

    <div class="profile-box">
        <h1>Student Details</h1>
        <?php if ($student): ?>
            <div class="profile-item">
                <label>Name:</label>
                <span><?php echo htmlspecialchars($student['Name']); ?></span>
            </div>
            <div class="profile-item">
                <label>Street Address:</label>
                <span><?php echo htmlspecialchars($student['St_Address']); ?></span>
            </div>
            <div class="profile-item">
                <label>NIC:</label>
                <span><?php echo htmlspecialchars($student['NIC']); ?></span>
            </div>
            <div class="profile-item">
                <label>Course:</label>
                <span><?php echo htmlspecialchars($student['Course']); ?></span>
            </div>
            <div class="profile-item">
                <label>Branch:</label>
                <span><?php echo htmlspecialchars($student['Branch']); ?></span>
            </div>
            <form action="Delete_std.php" method="POST">
    <input type="hidden" name="NIC" value="<?php echo htmlspecialchars($student['NIC']); ?>">
    <div class="editbtn">
        <button type="submit" name="delete">Delete</button>
        <button>Edit</button>
    </div>
</form>
        <?php else: ?>
            <div class="profile-item">
                <span>No student details found. Please search using a valid NIC.</span>
            </div>
        <?php endif; ?>
    </div>
    <!-- End of the profile details view section -->

    

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
