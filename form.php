<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="let.png">
    <title>PapuSha Travel Co.</title>
    <!-- <link rel="stylesheet" href="form.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
<style>
    /* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color:  #4A90E2;
}


/* header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    justify-content: space between;
    height: 4rem;
} */
#center{
    color: white;
    margin-top: 20px;
    text-align: center;
}

/* #hd {
    color: white;
    font-family: "Dancing Script", serif;
    font-optical-sizing: auto;
    font-weight: 900;
    font-style: normal;
} */
.btn {
        background-color: rgba(45, 119, 204, 0.84); /* Green */
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border: none;
        border-radius: 10px;
        transition: background-color 0.3s ease;
       
}
.btn:hover {
    background-color: rgba(49, 91, 139, 0.973); /* Darker Green */
}


#hd1 {
    margin-left: 30px;
    margin-top: 6px;
    font-size: 2.1em;
    color: white;
    font-family: "Dancing Script", serif;
    font-optical-sizing: auto;
    font-weight: 900;
    font-style: normal;
}

/* nav ul {
    margin-right: 30px;
    margin-top: -60px;
    float: right;
    list-style: none;
    text-align: center;
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

.footer-left, .footer-middle, .footer-right {
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

.footer-middle h4, .footer-right h4 {
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
.center{
text-align: center;
margin-bottom: 50px;
}
/*form decoration*/
/* Form Group Styling */
.form-group {
    margin-bottom: 10px;
    align-items: center;
    width: 100%;
    display: flex;
    justify-content: center;
}
.form-group1 {
    color: black;
    margin-bottom: 10px;
    text-align: center;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Form Row and Columns (For responsive layout) */
.form-row {
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction:column;
    gap: -15px;
    text-align: center;
    width: 60%;
}

.col {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

/* Input and Textarea Styling */
.form-control {
    background-color:black;
    width: 50%;
    padding: 14px;
    border: 2px solid #ddd;
    border-radius: 15px;
    font-size: 16px;
    color: white;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    justify-content: center;
}

.form-control:focus {
    border-color: #4A90E2;
    box-shadow: 0 0 8px rgba(74, 144, 226, 0.5);
    outline: none;
}

textarea.form-control {
    height: 150px;
    resize: none;
}

/* 
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



   /* Mobile Responsive */
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
    .form-control{
        width: 95%;
    }
}

@media (max-width: 768px) {
    .form-control{
        width: 95%;
    }
    .services {
        flex-direction: column;
        align-items: center;
    }
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
    .form-control{
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php" id="paposha">PapoSha</a>
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
<br><br>
<div id="center">
    <h1><span id="hd">PapuSha </span>Travel Co.</h1>
</div><br>
    <form target="_blank" action="https://formsubmit.co/shakirsolangii870@gmail.com" method="POST">
      <div class="form-group">
           <input type="hidden" name="_template" value="table">
               <div class="form-row">
                         <div class="col">
                           <input type="text" name="name" class="form-control" placeholder="Full Name" required style="width:84%;">-
                         </div><br>
                                 <div class="col">
                                  <input type="email" name="email" class="form-control" placeholder="Email Address" required style="width:84%;">
                                  </div>
                           </div>
                     </div>
                      <div class="form-group1">
                      <textarea placeholder="Your Message" class="form-control" name="message" rows="10" required></textarea>
                   </div>
               <div class="center">
           <button type="submit" class="btn" style=" cursor: pointer;">Send Email</button>
               </div>
    </form>
    
    <br><br><br>

    <footer class="footer">
      <div class="footer-container">
          <div class="footer-left">
              <h3><span id="hd">PapoSha</span> Travel Co.</h3>
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