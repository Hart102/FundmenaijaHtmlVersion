<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="FundMeNaija"
      content="FundMeNaija website"
    />
    <title>FundMeNaija | Home</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Main css -->
    <link href="../auth/asserts/css/styles.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
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
    <!-- Banner -->
    <section class='Banner py-5'>
        <div class="container py-5 px-lg-5 my-5">
            <main class='col-md-9 text-center mx-auto my-2'>
                <h1 class='display-3 font-weight-bold text' style="color: #f3613c, opacity: 1, fontWeight: 700">FUND AND GET FUNDED</h1>
                <p class='text-white text-capitalize'>fund and raise funds from people globally to support your projects, bills, daily needs and other things from FundMeNaija today</p>

                <button class="btn font-weight-bold text-white py-3 px-5">Get started</button>
            </main>
        </div>
    </section>
    <!-- Section one -->
    <section>
      <div class="container d-flex py-5 px-3">
        <div class="col-md-5 px-lg-5 d-lg-block d-none">
          <div style="width: 100%, height: 60vh, position: relative">
            <picture>
              <img src="../auth/asserts/img/222.jpg" class='img-fluid' style="position: absolute, width: 100%, height: 100%, border-radius: 10px">
            </picture>
          </div>

        </div>
        <div class="col-md-6">
          <h1 class="display-4" style="color: #15242b">Raising money have never been easy.</h1>
          <p class='my-lg-5'>We provide you with opportunity to dream and see it come to pass by helping you get the needed funding on any project, plans or other basic needs.</p>
          <button class="btn font-weight-bold text-white py-3 px-5">Get started</button>
        </div>
      </div>
    </section>
    <!-- Content Two -->
    <section class="contentTwo Banner1 d-flex justify-content-center py-5">
        <div class="container px-lg-5">
            <div class="title text-center mb-5" >
                <h1 class="mx-3 display-6" >Who is eligible ?</h1>
                <p class='text-center'>Check who is eligible to raise or donate fund.</p>
            </div>
            <div class="card-container">
                <span>
                    <div class="main-card d-lg-flex shadow-sm" id="element">
                        <div class="text-container d-flex flex-column justify-content-center py-5 px-5">
                            <h4 class='text-uppercase'>Individuals</h4>
                            <p class='text-capitalize'>Individuals who are in need financially or medically</p>
                        </div>
                    </div>
                </span>
                <span>
                    <div class="main-card d-lg-flex shadow-sm" id="element">
                        <div class="text-container d-flex flex-column justify-content-center py-5 px-5">
                            <h4 class='text-uppercase'>Churches</h4>
                            <p class='text-capitalize'>Churches for fund raising and offerings.</p>
                        </div>
                    </div>
                </span>
                <span>
                    <div class="main-card d-lg-flex shadow-sm" id="element">
                        <div class="text-container d-flex flex-column justify-content-center py-5 px-5">
                            <h4 class='text-uppercase'>Schools</h4>
                            <p class='text-capitalize'>Schools for fund raising.</p>
                        </div>
                    </div>
                </span>
                <span>
                    <div class="main-card d-lg-flex shadow-sm" id="element">
                        <div class="text-container d-flex flex-column justify-content-center py-5 px-5">
                            <h4 class='text-uppercase'>Small scale business</h4>
                            <p class='text-capitalize'>For businesses investment.</p>
                        </div>
                    </div>
                </span>
                <span>
                    <div class="main-card d-lg-flex shadow-sm" id="element">
                        <div class="text-container d-flex flex-column justify-content-center py-5 px-5">
                            <h4 class='text-uppercase'>Hospitals</h4>
                            <p class='text-capitalize'>For medical donations like blood, body organ donors and volunteers.</p>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-baseline">
                <section class="col-md-6 align-items-center p-0" style="background: #f3f7f8" >
                    <div class="show px-lg-5 px-4 py-1 mb-1" style="transition: 0.5s">
                        <div class="my-5">
                            <div class="d-flex align-items-center">
                                <div style="background: #f3613c, padding: 5px 9px, border-radius: 30px, color: white, font-weight: bold">01</div>
                                    <h4 class="mx-3">About FundMeNaija</h4>
                                </div>
                                <p style="color: #777, margin-top: 0.5em, line-height: 30px">FundMeNaija is global community designed to provide solutions on funding for everyone with a genuine need globally.</p>
                        </div>    
                    </div>
                    <div class="show px-lg-5 px-4 py-4" style="transition: 0.7s">
                        <div class="my-5">
                            <div class="d-flex align-items-center">
                                <div style="background: #f3613c, padding: 5px 9px, border-radius: 30px, color: white, font-weight: bold">02</div>
                                    <h4 class="mx-3">Why you should Choose FundMeNaija</h4>
                                </div>
                                <p style="color: #777, margin-top: 0.5em, line-height: 30px">FundMeNaija is a unique Crowdfunding market place that stands on efficiency, global best practice and transparency</p>
                        </div>
                    </div>
                </section>

                <section class="show col-md-6 px-lg-5 px-4" id='item1' style="transition: 0.9s">
                    <div class="show px-lg-5 px-4 py-4" style="transition: 0.7s">
                        <div class="my-5">
                            <div class="d-flex align-items-center">
                                <div style="background: #f3613c, padding: 5px 9px, border-radius: 30px, color: white, font-weight: bold">03</div>
                                    <h4 class="mx-3">How FundMeNaija works</h4>
                                </div>
                                <p style="color: #777, margin-top: 0.5em, line-height: 30px">Everyone is welcomed to FundMeNaija as a fundraiser or a donor, both as individuals and organization, we will server you just by creating a fundraiser wallet and get approved in seconds.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="Content-four">
      <div class="container p-lg-5 p-3">
        <h1 class="display-6 font-weight-bold my-4 text-white">How to get started</h1>
        <div class="d-lg-flex text-center text-white">
          
          <div class="card p-4 my-3 h5">
            <p>Sign up and verify your account</p>
          </div>

          <div class="card p-4 mx-lg-4 my-3 h5">
            <p>Donate</p>
          </div>

          <div class="card p-4 my-3 h5">
            <p>Volunteer</p>
          </div>
          </div>
       </div>
    </section>
    
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
    
  </body>
</html>
