<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $Full_name=$_POST['Full_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $comments=$_POST['comments'];

    $sql= "insert into registations (Full_name,email,phone,comments) values('$Full_name','$email','$phone','$commments')";
    $result = mysqli_query ($con,$sql);
    if($result){
        //echo "data inserted successfully";
        //header('location: display.php');
    }else{
        die(mysqli_error($con));
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Tree Planting Day - Green Guardians of MUST</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->

<style>

    /* General Styles */
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background: #e9e0c9;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 50px;
    background-color: #5c8233;
    color: white;
    position: relative;
}

header::before {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    right: 0;
    height: 10px;
    background: #4d7130;
    z-index: -1;
}

.logo img {
    width: 80px;
    height: auto;
}

nav {
            padding: 10px;
            text-align: right;
            font-size: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        nav a:hover {
            color: aqua;
        }
main {
    padding: 20px;
}

/* Registration Form Section Styles */
main h1 {
    color: #4CAF50;
}

main p {
    margin-bottom: 20px;
}

main form {
    max-width: 400px;
}

main form label {
    margin-bottom: 5px;
    display: block;
}

main form input[type="text"],
main form input[type="email"],
main form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}

main form button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

main form button:hover {
    background-color: #45a049;
}

/* Footer Section Styles */
footer {
    background-color: #f2f2f2;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

footer .contact-info p {
    margin: 5px 0;
}

footer .social-media li {
    display: inline-block;
    margin-right: 10px;
}

footer .social-media li:last-child {
    margin-right: 0;
}
.logo img {
    width: 80px;
    height: auto;
}

</style>

    
</head>

<header>
    <div class="logo">
        <img src="bdfgdth.png" alt="Green Guardians of MUST Logo"> <!-- Placeholder for club logo -->
    </div>
    <nav>
        
            <a href="index.html">Home</a>
            <a href="about.html">About Us</a>
            <a href="activities.html">Activities</a>
            <a href="events.html">Events</a>
            <a href="join.html">Join Us</a>
            <a href="contact.html">Contact</a>
    
    </nav>
</header>

<body>
    
    <main>
        <h1>Register for Tree Planting Day</h1>
        <p>Help us plant trees around the university park to enhance the green cover and promote biodiversity. No prior experience required.</p>
        <form action="register_treeplanting.php" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="comments">Comments or Questions:</label>
            <textarea id="comments" name="comments"></textarea>
            <button type="submit">Register</button>
        </form>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="contact-info">
            <p>Contact us at: <a href="mailto:info@greenguardiansmust.com">info@greenguardiansmust.com</a></p>
            <p>Follow us on social media:</p>
            <ul class="social-media">
                <li><a href="https://facebook.com/greenguardiansmust" target="_blank">Facebook</a></li>
                <li><a href="https://twitter.com/greenguardiansmust" target="_blank">Twitter</a></li>
                <li><a href="https://instagram.com/greenguardiansmust" target="_blank">Instagram</a></li>
            </ul>
        </div>
        <div class="quick-links">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="activities.html">Activities</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="join.html">Join Us</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
