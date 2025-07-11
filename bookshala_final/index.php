<?php 

    include 'function/connection.php';
    include 'function/session.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshala</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">
      <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<!-- Offline Bootstrap CSs -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">


</head>
<body>
    
    <!-- top banner -->

    <div class="top-banner">
        <div class="container">
            <div class="small-bold-text banner-text"> 🥳 New to bookshala : Come for the book , leave with the knowledge 💫
                <br>
              </div>
        </div>
    </div>

    <!-- nav bar -->
    <!-- <nav class="navbar">
        <div class="container main-nav flex">
            <a href="#" class="company-logo">
                <img src="./assets/logo.svg" alt="company logo">
            </a>
            <div class="nav-links" id="nav-links">
                <ul class="flex">
                    <li><a href="#" class="hover-link">Home </a></li>
                    <li><a href="shop.php" class="hover-link">Store </a></li>
                    <li><a href="cart.php" class="hover-link">Cart</a></li>
                    <li><a href="aboutus.php" class="hover-link">About us </a></li>
                    <?php if (logged_in()) { ?>
                <li>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><?php echo $_SESSION['FIRST_NAME'];?></button>
                        <div id="myDropdown" class="dropdown-content">
                         <ul class="dropdown">
                             <li><option value=""><a href="">sell </a></option></li>
                         </ul>
                        </div>
                </div>
                </li>            
                    <?php }else { ?>
                    <li><a href="SignUp.php" class="hover-link secondary-button">Sign in</a></li>
                    <li><a href="login.php" class="hover-link primary-button">Login in </a></li>
                    <?php } ?>   
                </ul>
            </div>
            <a href="#" class="nav-toggle hover-link" id="nav-toggle">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
    </nav> -->
    <?php include 'include/navigation.php'; ?>
    <!-- header section -->
    <header>
        <div class="container header-section flex">
            <div class="header-left">
                <h1>Book shala </h1>
                <p>Bookshala is a store that sells books , and where people can buy them. A used bookstore or second-hand bookshop sells and often buys used books.</p>
                <a href="index.php" class="primary-button get-started-btn">Get Started</a>
            </div>
            <div class="header-right">
                <img src="./assets/frontimg.svg" alt="hero image">
            </div>
        </div>
    </header>

    <!-- companies section -->

    <!-- <section class="companies-section">
        <div class="container">
            <div class="small-bold-text companies-header">The world’s best companies rely on UsabilityHub to make better design decisions.</div>
            <div class="logos flex">
                <img class="logo" src="./assets/asset 3.png" alt="">
                <img class="logo" src="./assets/asset 4.png" alt="">
                <img class="logo" src="./assets/asset 5.png" alt="">
                <img class="logo" src="./assets/asset 6.png" alt="">
                <img class="logo" src="./assets/asset 7.png" alt="">
                <img class="logo" src="./assets/asset 8.svg" alt="">
                <img class="logo" src="./assets/asset 9.png" alt="">
            </div>
        </div>
    </section> -->

    <!-- features section -->

    <section class="features-section">
        <div class="container">
            <!-- <div class="features-header">
                <h2 class="features-heading-text">Your user research Swiss Army knife</h2>
                <a href="#" class="secondary-button">See all features <i class="fa-solid fa-right-long"></i></a>
            </div> -->



            <div class="features-area flex">
                <div class="features-card flex">
                    <img src="./assets/book2.png" alt="">
                    <h3>Engineering Book </h3>
                    <p>Discover how people group and label information.</p>
                    <a href="shop.php" class="secondary-button">Learn More <i class="fa-solid fa-right-long"></i></a>
                </div>
                <div class="features-card flex">
                    <img src="./assets/book1.svg" alt="">
                    <h3>Diploma Book </h3>
                    <p>Discover how people navigate your Figma prototypes.</p>
                    <a href="shop.php" class="secondary-button">Learn more <i class="fa-solid fa-right-long"></i></a>
                </div>
                <div class="features-card flex">
                    <img src="./assets/book3.svg" alt="">
                    <h3>Programming Book </h3>
                    <p>Test interaction with first click and navigation tests.</p>
                    <a href="shop.php" class="secondary-button">Learn more <i class="fa-solid fa-right-long"></i></a>
                </div>
                <div class="features-card flex">
                    <img src="./assets/improvement.svg" alt="">
                    <h3>Self-Improvement </h3>
                    <p>Get feedback on images, videos or audio files.</p>
                    <a href="shop.php" class="secondary-button">Learn more <i class="fa-solid fa-right-long"></i></a>
                </div>
                <div class="features-card flex">
                    <img src="./assets/book5.jpg" alt="">
                    <h3> Devotional Book </h3>
                    <p>Find out which designs users prefer and why.</p>
                    <a href="shop.php" class="secondary-button">Learn more <i class="fa-solid fa-right-long"></i></a>
                </div>
                <div class="features-card flex">
                    <img src="./assets/book4.svg" alt="">
                    <h3>School Book</h3>
                    <p>Test comprehensibility by measuring first impressions.</p>
                    <a href="shop.php" class="secondary-button">Learn more <i class="fa-solid fa-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- big features section -->

    <section class="big-feature-section">
        <div class="container flex big-feature-container">
            <div class="feature-img">
                <img src="./assets/frontimg1.svg" alt="">
            </div>
            <div class="feature-desc flex">
            <h4>Cutting-Edge Technology </h4>
                <!-- <h3>Design professionals</h3> -->
                <p>By using Technologies such as data analystand better understand customer preference and behavior allowing its to optimize its inventory and pricing to meet customer needs</p>
            </div>
        </div>
    </section>
    
    <section class="big-feature-section">
        <div class="container flex big-feature-container" id="second-big-feature">
            <div class="feature-img">
                <img src="./assets/frontimg2.svg" alt="">
            </div>
            <div class="feature-desc flex">
            <h4>High-Equality second-hand at low cost</h4>
                <!-- <h3>Design professionals</h3> -->
                <p>This will help Bookshala keeps it cost low while still providing high quality book to its customer</p>
            </div>
        </div>
    </section>

    <section class="big-feature-section">
        <div class="container flex big-feature-container">
            <div class="feature-img">
                <img src="./assets/frontimg3.svg" alt="">
            </div>
            <div class="feature-desc flex">
            <h4>Create a community for book lover</h4>
                <!-- <h3>Design professionals</h3> -->
                <p>Book shala can create a space for baklava to connect and share their love for reading .This can  includes a blog foruymWhere customer can discourse book author and their favorite journals</p>
            </div>
        </div>
    </section>

    <!-- examples section -->

    <section class="examples-section">
        <div class="container">
            <!-- <div class="examples-header flex">
                <h2 class="examples-heading-text">One platform, endless possibilities</h2>
                <a href="#" class="secondary-button">See more examples <i class="fa-solid fa-right-long"></i></a>
            </div> -->
            <div class="examples-area flex">
                <a href="#" class="examples-card" style="background: linear-gradient(rgb(0, 0, 0, 0.1), rgb(0, 0, 0, 0.8)), url(./assets/fast-delivery.png); background-size: cover;">
                    <h3 class="card-text">Fast Shipping </h3>
                </a>
                <a class="examples-card" href="#" style="background: linear-gradient(rgb(0, 0, 0, 0.1), rgb(0, 0, 0, 0.8)), url(./assets/doorstep-pick-up.png); background-size: cover;">
                    <h3 class="card-text">Door step pick-up</h3>
                </a>
                <a class="examples-card" href="#"  style="background: linear-gradient(rgb(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8)), url(./assets/affordable-price.png); background-size: cover;">
                    <h3 class="card-text">affordable-prices</h3>
                </a>
                <a class="examples-card" href="#" style="background: linear-gradient(rgb(0, 0, 0, 0.1), rgb(0, 0, 0, 0.8)), url(./assets/support.png); background-size: cover;">
                    <h3 class="card-text">24/7 Support </h3>
                </a>
            </div>
        </div>
    </section>

    <!-- cta section -->

    <!-- <section class="cta-section">
        <div class="container flex cta-section-container">
            <h2>Start testing today</h2>
            <p>Take the guesswork out of design decisions</p>
            <a href="#" class="primary-button">Get Started</a>
        </div>
    </section> -->

    <!-- footer -->

    <!-- <footer>
        <div class="container flex footer-container">
            <a href="#" class="company-logo">
                <img src="./assets/asset 1.png" alt="company logo">
            </a>
            <div class="link-column flex">
                <h4>Product</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
            <div class="link-column flex">
                <h4>Methodology</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
            <div class="link-column flex">
                <h4>Resources</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
        </div>
    </footer> -->

    <!-- subfooter -->

    <div class="subfooter">
        <div class="container flex subfooter-container">
            <a class="bootoom" href="#">Privacy policy</a>
            <a class="bootoom" href="#">Terms & Condition</a>
            <a class="bootoom" href="#">Security Information</a>
            <a class="bootoom" href="#"><i class="fa-brands fa-facebook"></i></a>
            <a class="bootoom" href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
  <!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>                    

                    <!-- Offline Bootstrap CSS -->
                    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>

    <script>
        const toggleButton = document.getElementById('nav-toggle');
        const navLinks = document.getElementById('nav-links');

        toggleButton.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        })
        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>

</body>
</html>