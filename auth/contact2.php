<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="FundMeNaija"
      content="FundMeNaija website"
    />
      <!-- Favicons -->
      <link href="./assets/img/favicon-32x32.png" rel="icon">
    <link href="./assets/img/apple-icon-180x180.png" rel="apple-touch-icon">

    <title>FundMeNaija | Home</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Main css -->
    <link href="../asserts/css/styles.css" type="text/css" rel="stylesheet">
    <link href="../asserts/css/contact.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container d-flex justify-content-between align-items-center py-2 px-lg-5">
            <!---------------------- Logo ---------------------->
            <a href='../index.php' class="logo-container nav-link d-flex align-items-center">
                <div class='logo-img'>
                    <img src="../assets/img/Logo3.png" alt="Logo" class="img-fluid">
                </div>
                <div class="logo h6 text-dark">FUNDMENAIJA</div>
            </a>
            <!-- ------------- Desktop screen menu  ------------- -->
            <ul class="list-unstyled desktop">
                <div class="d-flex align-items-center">
                    <li>
                        <a href='../auth/about.php' class='nav-link text-dark mx-lg-2 py-2 px-3' id='nav-link'>About</a>
                    </li>
                    <li>
                        <a href='auth/contact.php' class="nav-link text-dark mx-lg-2 py-2 px-3" id='nav-link'>Contact</a>
                    </li>
                    <li>
                        <a href='../auth/donate.php' class="nav-link text-dark mx-lg-2 py-2 px-3" id='nav-link'>Donate</a>
                    </li>
                    <li>
                        <a href='user/login.php' class="nav-link text-dark mx-lg-2 py-2 px-3" id='nav-link'>Sign in</a>
                    </li>
                    <li>
                        <button>
                            <a href="user/createAccount.php"
                                class="nav-link font-weight-bold text-white px-4">Sign up
                            </a>
                        </button>
                    </li>
                </div>
            </ul>

            <!-- ------------- Mobile screen menu  ------------- -->
            <ul class="mobile">
                <div class="d-flex font-weight-bold border-top">
                    <li>
                        <a href='./index.php' class='nav-link my-3 text-white'>Home</a>
                    </li>
                    <li>
                        <a href='auth/about.php' class='nav-link my-3 text-white'>About</a>
                    </li>
                    <li>
                        <a href='auth/contact.php' class='nav-link my-3 text-white'>Contact</a>
                    </li>
                    <li>
                        <a href='auth/donate.php' class='nav-link my-3 text-white'>Donate</a>
                    </li>
                    <li>
                        <a href='./user/login.php' class='nav-link my-3 text-white'>Sign in </a>
                    </li>
                    <li>
                        <a href='./user/createAccount.php' class='nav-link my-3 text-white'>Sign up </a>
                    </li>
                </div>
            </ul>

            <!-- ----------------- Hamburger menu ----------------- -->
            <div class='hambuger' onClick="hamburger()">
                <i class='menuIcon fa fa-bars text-white fa-2x'></i>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="wrapper animated bounceInLeft">
            <div class="company-info">
                <h3 class="brand"><span>FundMeNaija</span> Contact Form</h3>
                <ul>
                    <li><i class="fas fa-address-book my-3"></i>Lagos Nigeria</li>
                    <li><i class="fas fa-phone my-3"></i> +2347-000-000-000</li>
                    <li><i class="fas fa-envelope my-3"></i> contact@fundmenaija.com</li>
                </ul>
            </div>
            <div class="contact">
                <h3>Email Us</h3>
                <div class="alert">Your Message has been sent</div>
                <form id="contactForm">
                    <p>
                        <label>Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your full name">
                    </p>
                    <p>
                        <label>Company</label>
                        <input type="text" name="company" id="company" placeholder="Enter your company Name if Any">
                    </p>
                    <p>
                        <label>Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your Email Address">
                    </p>
                    <p>
                        <label>Phone Number</label>
                        <input type="text" name="name" id="phone" placeholder="Enter your phone number">
                    </p>
                    <p class="full">
                        <label>Message</label>
                        <textarea name="message" rows="5" id="message" placeholder="Add a comment..."></textarea>
                    </p>
                    <p class="full">
                        <button type="submit">Send Mail</button>
                    </p>
                </form>
            </div>
        </div>
    </div>


    <!---------------------- Footer template ---------------------->
    <footer  style="background: #1e1e26; display: flex; justify-content: center">
        <div class="container p-4 d-lg-flex justify-content-between text-white">
            <span class='my-5'>
                <div class="d-flex align-items-center">
                    <div style="width: 70px; height: 50px; position: relative;">
                        <img src="../assets/img/Logo3.png" alt="Logo" class="img-fluid" style="width: 100%; height: 100%; position: absolute" />
                    </div>
                    <div class="logo h6 text-white">FUNDMENAIJA</div>
                </div>
                <div class="d-flex social-icons m-4">
                    <a href='#' class='nav-link text-white'>
                        <i class='fab fa-facebook fa-1x'></i>
                    </a>
                    <a href='#' class='nav-link text-white'>
                        <i class='fab fa-instagram fa-1x mx-4'></i>
                    </a>
                    <a href='#' class='nav-link text-white'>
                        <i class='fab fa-twitter fa-1x'></i>
                    </a>
                </div>
            </span>
            <ul class="list-unstyled my-5 mx-lg-0 mx-3">
                <li class='my-2'>
                    <a href='./index.php' class='nav-link text-white'>Home</a>
                </li>
                <li class='my-2'>
                    <a href='auth/about.php' class='nav-link text-white'>About</a>
                </li>
                <li class='my-2'>
                    <a href='auth/contact.php' class='nav-link text-white'>Contact</a>
                </li>
                <li class='my-2'>
                    <a href='auth/donate.php' class='nav-link text-white'>Donate</a>
                </li>
            </ul>
    
            <ul class="list-unstyled my-5 mx-lg-0 mx-3">
                <li><a href='#' class='nav-link text-white'>Privacy policy</a></li>
                <li><a href='#' class='nav-link text-white'>Help</a></li>
            </ul>
        </div>
    </footer>


    <script src='../authjs/index.js'></script>
    <!-- <script src="../assets/js/main.js"></script> -->
</body>
</html>
