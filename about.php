<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="let.png">
    <title>About Us - PapoSha Travel Co.</title>
    <!-- <link rel="stylesheet" href="About.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
<style>
        /* General Styles */
        body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #4A90E2;
        color: #333;
    }
    /* header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        justify-content: space between;
        height: 2.7rem;
    }
    
    #hd {
        margin-left: 30px;
        margin-top: 10px;
        font-size: 2.1em;
        color: white;
        font-family: "Dancing Script", serif;
        font-optical-sizing: auto;
        font-weight: 900;
        font-style: normal;
    }
    
    nav ul {
        margin-right: 30px;
        margin-top: -75px;
        float: right;
        list-style: none;
        text-align: center;
    }
    
    nav ul li {
        display: inline;
        margin: 0 15px;
    }
    
    nav ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 1.2em;
    }
    
    nav ul li a.active {
        border-bottom: 2px solid #ff9900;
    } */
    
    
        /* Footer Styling */
        .footer {
            background-color: #000;
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }
    
        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
    
        .footer-left,
        .footer-middle,
        .footer-right {
            width: 30%;
        }
    
        .footer h3 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 15px;
        }
    
        .footer p {
            font-size: 16px;
            color: #bbb;
        }
    
        .footer-middle h4,
        .footer-right h4 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }
    
        .footer-middle ul {
            list-style: none;
            padding: 0;
        }
    
        .footer-middle ul li {
            margin-bottom: 10px;
        }
    
        .footer-middle ul li a {
            color: #bbb;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
        }
    
        .footer-middle ul li a:hover {
            color: #4A90E2;
        }
    
        .social-icons {
            margin-top: 10px;
        }
    
        .social-icons a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            margin: 0 10px;
            padding: 8px 16px;
            border-radius: 30px;
            background-color: #444;
            transition: background-color 0.3s ease;
        }
    
        .social-icons a:hover {
            background-color: #4A90E2;
        }
    
        .social-icons a:hover {
            background-color: #4A90E2;
        }
    
        /* Footer Bottom */
        .footer-bottom {
            margin-top: 30px;
            font-size: 14px;
            color: #bbb;
        }
    
        .footer-bottom p {
            margin-top: 10px;
        }
        
    
    
    /* Header Styles */
    .header {
        background: rgba(45, 119, 204, 0.84);
        padding: 80px 20px;
        text-align: center;
        color: white;
        height: auto;
    }
    
    .header h1 {
        background-color: rgba(45, 119, 204, 0.84);
        font-size: 3.5rem;
        margin: 0;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
    }
    #paposha{
        font-family: "Dancing Script", serif;
        font-optical-sizing: auto;
        font-weight: 900;
        margin-left: 13px;
    }
    
    .header p {
        font-size: 1.5rem;
        margin-top: 10px;
        font-weight: bold;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
    }
    
    /* About Us Section */
    .about-us {
        background-color:#4A90E2;
        padding: 50px 20px;
        text-align: center;
    }
    
    .about-us h2 {
        font-size: 2.5rem;
        color: white;
        margin-bottom: 20px;
    }
    
    .about-us p {
        font-size: 1.1rem;
        color: white;
        line-height: 1.8;
        margin: 0 auto 30px;
    }
    
    /* Mission Section */
    .mission {
        background-color: #4A90E2;
        padding: 50px 20px;
        text-align: center;
    }
    
    .mission h2 {
        font-size: 2.5rem;
        color: white;
        margin-bottom: 20px;
    }
    
    .mission p {
        font-size: 1.1rem;
        color: white;
        line-height: 1.8;
        max-width: 800px;
        margin: 0 auto;
    }
    
    /* Team Section */
    .team {
        padding: 50px 20px;
        background-color:#4A90E2;
        text-align: center;
    }
    
    .team h2 {
        font-size: 2.5rem;
        margin-bottom: 40px;
        color: white;
    }
    
    .team-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }
    
    .team-member {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        width: 250px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    
    .team-member img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin-bottom: 20px;
    }
    
    .team-member h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }
    
    .team-member p {
        font-size: 1rem;
        color: white;
        margin-bottom: 10px;
    }
    
    /* Responsive Design */
    @media (max-width: 1024px) {
        .footer-container {
            flex-direction: column;
            align-items: center;
        }
    
        .footer-left,
        .footer-middle,
        .footer-right {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }
    
        .footer-middle ul li a {
            font-size: 14px;
        }
    
        .social-icons a {
            font-size: 14px;
            padding: 6px 12px;
        }
    
        .footer-bottom {
            font-size: 12px;
        }
    }
    
    @media (max-width: 768px) {
        .footer-container {
            padding: 0 10px;
        }
    
        .footer h3 {
            font-size: 24px;
        }
    
        .footer p {
            font-size: 14px;
        }
    
        .footer-middle ul li a {
            font-size: 14px;
        }
    
        .social-icons a {
            font-size: 14px;
            padding: 6px 12px;
        }
    
        .footer-bottom {
            font-size: 12px;
        }
    }
    
    @media (max-width: 480px) {
        .team-member{
            width: 95%;
        }
        .footer-container {
            padding: 0 5px;
        }
    
        .footer h3 {
            font-size: 20px;
        }
    
        .footer p {
            font-size: 12px;
        }
    
        .footer-middle ul li a {
            font-size: 12px;
        }
    
        .social-icons a {
            font-size: 12px;
            padding: 4px 8px;
        }
    
        .footer-bottom {
            font-size: 10px;
        }
    }
    #paposha {
        font-family: "Dancing Script", serif;
        font-weight: 900;
       } 
</style>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php" id="paposha">PapoSha </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.html">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <header class="header">
        <div class="header-content">
            <h1>About<span id="paposha">PapoSha</span> Travel Co.</h1>
            <p>We are passionate about discovering the world and sharing it with you!</p>
        </div>
    </header>

    <section class="about-us">
        <div class="about-text">
            <h2>Our Story</h2>
            <p>
                PapoSha Travel Co. was born out of a shared love for exploring new places, experiencing different cultures, and seeking adventure. Our journey began in 2010, and over the years, we've visited over 30 countries, met amazing people, and learned that travel is not just about the destination—it’s about the experience. 
                We aim to inspire others to step out of their comfort zone and explore the world.
            </p>
        </div>

        <div class="mission">
            <h2>Our Mission</h2>
            <p>
                At PapoSha Travel Co. , we believe that travel has the power to change lives. Our mission is to provide our audience with inspiring stories, practical travel tips, and beautiful photography to fuel their wanderlust. We want to make travel accessible, exciting, and enriching for everyone.
            </p>
        </div>
    </section>

    <section class="team">
        <h2>Board Of Directors</h2>
        <div class="team-container">
            <div class="team-member" style="background-color:  rgba(45, 119, 204, 0.84); color: white;">
                <img src="pics/pa.jpeg" alt="Team Member 1" >
                <h3>Shakir Ali Solangi</h3>
                <p style="color: white;">Founder & Travel Writer</p>
                <p style="color: white;">Passionate about storytelling and discovering hidden gems around the world. Shakir’s travel blog has been featured in multiple travel magazines.</p>
            </div>
            <div class="team-member" style="background-color:  rgba(45, 119, 204, 0.84); color: white;">
                <img src="pics/sameesol.jpg" alt="Team Member 2">
                <h3> Samiullah Solangi</h3>
                <pstyle="color: white;">Photographer & Content Creator</p>
                <pstyle="color: white;">Alee Aqib Mirani captures the essence of every destination with his camera. His photographs tell the story of the people, landscapes, and cultures he encounters.</p>
            </div>
            <div class="team-member" style="background-color:  rgba(45, 119, 204, 0.84); color:white;">
                <img src="pics/aqib.jpeg" alt="Team Member 3">
                <h3>Alee Aqib Mirani</h3>
                <p style="color: white;">Travel Consultant & Advisor</p>
                <p style="color: white;">Emily’s expertise lies in creating customized travel itineraries that ensure travelers experience the best local experiences, off the beaten path.</p>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <h3><span id="paposha">PapoSha </span>Travel Co.</h3>
                <p>"Embark on unforgettable journeys with us – your gateway to exploring the world’s hidden gems and iconic destinations, all in one place."</p><div class="social-icons">
                <a href="form.php" class="social-icon facebook" target="_blank">Send Email</a>
    </div>
            </div>
            <div class="footer-middle">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="form.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-middle">
                <h4>Contact Information</h4>
                <ul>
                    <li>Email: Paposha@gmail.com</li>
                    <li>Phone: 033321448</li>
                </ul>
            </div>
            <div class="footer-right">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="https://www.facebook.com/samiullah.sami.79" class="social-icon facebook" target="_blank">Facebook</a><br><br>
                    <a href="#" class="social-icon instagram" target="_blank">Instagram</a><br><br>
                    <a href="#" class="social-icon linkedin" target="_blank">LinkedIn</a>
                   
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 PapoSha Travel Co. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
