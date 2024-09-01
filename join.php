<?php
include 'connection.php';
//var_dump($_POST['name']);echo 'ok!';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $year=$_POST['year'];
    $interests=$_POST['interests'];

    $sql= "insert into registations (Full_name, email, phone , year , interests) values('$name','$email','$phone','$year','$interests')";
    $result = mysqli_query ($con,$sql);
   // echo 'ok!'; die;
    if($result){
        if( $interests == "Campus Clean-Up Drives"){
            header('location: register_cleanup.php');
        }
        else if( $interests == "Tree Planting Initiatives"){
         header('location:register_treeplanting.php');
         }
         else if( $interests == "Recycling Programs"){
            header('location: Recycling.php');
            }
            else if( $interests == "Environmental Education Workshops"){
                header('location: register_workshop.php');
                }
                else if( $interests == "Sustainability Research Projects") {
                 header('location: research.php');
            }
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
    <title>Join Us - Green Guardians of MUST</title>
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

/* Main Section Styles */
main {
    padding: 20px;
}

/* Membership Benefits Section */
.membership-benefits {
    margin-bottom: 50px;
}

.membership-benefits h1 {
    color: #4CAF50;
}

.membership-benefits ul {
    list-style: none;
    padding: 0;
}

.membership-benefits ul li {
    margin-bottom: 10px;
}

/* Membership Form Section */
.membership-form {
    margin-bottom: 50px;
}

.membership-form h1 {
    color: #4CAF50;
}

.membership-form form {
    display: flex;
    flex-direction: column;
    max-width: 400px;
    margin-top: 20px;
}

.membership-form label {
    margin-bottom: 5px;
}

.membership-form input[type="text"],
.membership-form input[type="email"],
.membership-form input[type="tel"],
.membership-form textarea {
    padding: 8px;
    margin-bottom: 10px;
}

.membership-form button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.membership-form button:hover {
    background-color: #45a049;
}

/* Volunteer Opportunities Section */
.volunteer-opportunities {
    margin-bottom: 50px;
}

.volunteer-opportunities h1 {
    color: #4CAF50;
}

.volunteer-opportunities p {
    margin-bottom: 10px;
}

.volunteer-opportunities ul {
    list-style: none;
    padding: 0;
}

.volunteer-opportunities ul li {
    margin-bottom: 5px;
}

/* Footer Section Styles */
footer {
    background-color: #333;
    color: white;
    padding: 20px;
    display: flex;
    justify-content: space-between;
}

footer .contact-info,
footer .quick-links {
    width: 45%;
}

footer .contact-info a {
    color: #4CAF50;
    text-decoration: none;
}

footer .contact-info a:hover {
    text-decoration: underline;
}

footer .social-media {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 10px;
}

footer .social-media li a {
    color: white;
    text-decoration: none;
}

footer .quick-links ul {
    list-style: none;
    padding: 0;
}

footer .quick-links ul li {
    margin: 10px 0;
}

footer .quick-links ul li a {
    color: white;
    text-decoration: none;
}

footer .quick-links ul li a:hover {
    text-decoration: underline;
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
   

    <!-- Main Section -->
    <main>
        <!-- Membership Benefits Section -->
        <section class="membership-benefits">
            <h1>Membership Benefits</h1>
            <ul>
                <li>Connect with like-minded individuals who are passionate about the environment</li>
                <li>Participate in exclusive events and workshops</li>
                <li>Gain hands-on experience in environmental projects</li>
                <li>Enhance your resume with volunteer experience</li>
                <li>Make a tangible impact on the local environment</li>
            </ul>
        </section>

        <!-- Membership Form Section -->
        <section class="membership-form">
            <h1>Sign Up for Membership</h1>
            <form action="join.php" method="post">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
                <label for="year">Year of Study:</label>
                <input type="text" id="year" name="year" required>
                <label for="interests">Areas of Interest:</label>
                <select name="interests" id="">
                    <option value="">Choose Here</option>
                    <option value="Campus Clean-Up Drives">Campus Clean-Up Drives</option>
                    <option value="Tree Planting Initiatives">Tree Planting Initiatives</option>
                    <option value="Recycling Programs">Recycling Programs</option>
                    <option value="Environmental Education Workshops">Environmental Education Workshops</option>
                    <option value="Sustainability Research Projects">Sustainability Research Projects</option>
                </select>
                <button type="submit" name="submit">Join Now</button>
            </form>
        </section>

        <!-- Volunteer Opportunities Section -->
        <section class="volunteer-opportunities">
            <h1>Volunteer Opportunities</h1>
            <p>We offer various volunteer opportunities for our members to get involved in:</p>
            <ul>
                <li>Campus Clean-Up Drives</li>
                <li>Tree Planting Initiatives</li>
                <li>Recycling Programs</li>
                <li>Environmental Education Workshops</li>
                <li>Sustainability Research Projects</li>
            </ul>
            <p>Contact us to learn more about how you can contribute to our initiatives.</p>
        </section>
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
</body>
</html>
