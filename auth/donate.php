<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="FundMeNaija"
      content="FundMeNaija website"
    />
    <title>FundMeNaija | Donate</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Main css -->
    <link href="../auth/asserts/css/styles.css" type="text/css" rel="stylesheet">
    <link href="../auth/asserts/css/donate.css" type="text/css" rel="stylesheet">
    <link href="../auth/asserts/css/fundraiser.css" type="text/css" rel="stylesheet">

  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>

<section class='Donation'>
<header class='shadow-sm' style="background: backgroundColor">

<div class="container d-flex justify-content-between align-items-center py-2 px-lg-5">
    <div style="width: '50px', height: '50px'">
    <img src="../auth/asserts/img/donation.jpg" alt="Logo" class="img-fluid rounded-circle" />
        <h3>FundMeNaija</h3>
    </div>
    <ul class="list-unstyled desktop">
        <div class="d-flex align-items-center">
            <li>
                <a href='/about' class='nav-link mx-lg-2 py-2 px-3 text-dark'>About</a>
            </li>
            <li>
                <a href='/contact' class="nav-link mx-lg-2 py-2 px-3" style="color: linkColor">Contact</a>
            </li>
            <li>
                <a href='/donate' class="nav-link mx-lg-2 py-2 px-3" style="color: linkColor">Donate</a>
            </li>
            <li>
                <a href='/login' class="nav-link mx-lg-2 py-2 px-3" style="color: linkColor">Sign in</a>
            </li>
            <li>
                <button class="py-2">
                    <a href="/createAccount"
                        class="nav-link font-weight-bold text-white px-4">Sign up
                    </a>
                </button>
            </li>
        </div>
    </ul>

    <!-- {/************* Mobile screen menu  *************/} -->
    <ul class="mobile">
        <div class="d-flex font-weight-bold border-top">
            <li>
                <Link href='/about'
                    class='nav-link my-3 text-white'>About
                </Link>
            </li>
            <li>
                <Link href='/contact'
                    class='nav-link my-3 text-white'>Contact
                </Link>
            </li>
            <li>
                <Link href='/donate'
                    class='nav-link my-3 text-white'>Donate
                </Link>
            </li>
            <li>
                <Link href='/auth/login'
                    class='nav-link my-3 text-white'>Sign in
                </Link>
            </li>
            <li>
                <Link href='/auth/signup'
                    class='nav-link my-3 text-white'>Sign up
                </Link>
            </li>
        </div>
    </ul>

    <!-- {/**************** Hamburger menu ****************/} -->
    <div class='hambuger' onclick="() => hamburger()">
        <!-- { switchMenuIcon !== 'true' 
            ? 
            <i class={changeLinkColor !== 'true' ? 
                'fa fa-bars text-white fa-2x' : 
                'fa fa-bars text-dark fa-2x'}>
            </i>
            :
            <i class={changeLinkColor !== 'true' ? 
                'fa fa-times text-white fa-2x' : 
                'fa fa-times text-dark fa-2x'}>
            </i>
        } -->
    </div>
</div>
</header>
<div class="container py-3 px-lg-5">
            <nav class='shadow bg-white d-flex justify-content-between align-items-center px-4 py-3'>
            <form class='d-flex align-items-center'>
                <input type="text" class="form-control py-1 px-3" 
                style="border-top-right-radius: 0px, border-bottom-right-radius: 0px
                " placeholder='Search'/>

                <i class="fa fa-search text-white p-2 dark-hove" 
                    style="background: #63baba,border-top-right-radius: 5px,border-bottom-right-radius: 5px
                "></i>
            </form> 
                <b class='light-cyan-color hover'>Sort</b>
            </nav>



            <section class="Fundraiser p-4 bg-white my-4">
                <div class='d-lg-flex align-items-center'>
                    <div class='fundraiser-img'>  

                        <picture>
                            <img src={img} 
                                class="img-fluid mx-lg-0 mx-3 p-2 border" 
                            />
                        </picture>
                    </div>

                    <div class="col-md-8 mx-4">
                        <div class="fundraiser-name col-md-12 text-truncate">
                            <b class='text-capitalize'>Devine international school</b>
                            <p>Raising for cctv installation, to ensure adequate security of our students.</p>
                            <p class='address text-capitalize'>Address: <span>No 5 Melrose Street</span></p>
                            <a href='/details' class='nav-link'>
                                <b class='light-cyan-color hover'>View</b>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="d-flex">
                    <div class='event-img my-lg-5 my-2'>
                        <img src="../auth/asserts/img/myhome.svg" alt="image" class='img-fluid'/>
                    </div>

                    <div class='event-img my-lg-5 my-2 mx-lg-2 mx-1'>
                        <img src="../auth/asserts/img/222.jpg" alt="image" class='img-fluid'/>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer  style="background: #1e1e26, display: flex, justify-content: center">
            <div class="container p-4 d-lg-flex justify-content-between text-white">
                <span class='my-5'>
                    <div class="h3" style="color: #f3613c">Fund</div>
                    <div class="social-icons">
                        <i class='fab fa-facebook fa-1x'></i>
                        <i class='fab fa-instagram fa-1x mx-4'></i>
                        <i class='fab fa-twitter fa-1x'></i>
                    </div>
                </span>
                <ul class="list-unstyled my-5">
                    <li class='my-2'>Home</li>
                    <li class='my-2'>Contact</li>
                    <li class='my-2'>Transfer fund</li>
                </ul>

                <ul class="list-unstyled my-5">
                    <li>Privacy policy</li>
                    <li>Help</li>
                </ul>
            </div>
        </footer>
    </section>