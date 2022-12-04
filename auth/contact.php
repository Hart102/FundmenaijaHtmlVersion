<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require '../vendor/autoload.php';

//     $errMsg = '';
//     $errMsgClass = '';
//     $contact_name = $contact_email = $contact_msg = '';

// if(isset($_POST['contactMsg'])){
//     // Instantiation and passing `true` enables exceptions
//     $mail = new PHPMailer(true);

//     $contact_name = htmlspecialchars($_POST['contact_name']);
//     $contact_email = htmlspecialchars($_POST['contact_email']);
//     $contact_msg = htmlspecialchars($_POST['contact_msg']);

//     if(!empty($contact_name) && !empty($contact_email) && !empty($contact_msg)){
//         if(filter_var($contact_email, FILTER_VALIDATE_EMAIL) === false){
//             $errMsg = "Please use a vaild email";
//             $errMsgClass = "alert-danger";
//         }else{
//                 $toemail = "charlycareclasic@gmail.com";
// 				$title = "Charlycareclasic Contact from ".$contact_name;
// 				$body = '<html><body>';
// 				$body .= '<h2>Message For Charlycare Family Office</h2>
// 					<h4>Name</h4><p>'.$contact_name.'</p>
// 					<h4>Email</h4><p>'.$contact_email.'</p>
// 					<h4>Message</h4><p>'.$contact_msg.'</p>';
// 				$body .= '</body></html>';
//             try {
//                 //Server settings
//                 $mail->SMTPDebug = 0;
//                 $mail->isSMTP();                      
//                 $mail->Host       = 'ssl://smtp.gmail.com';
//                 $mail->SMTPAuth   = true;                  
//                 $mail->Username   = 'charlycareclasic@gmail.com';
//                 $mail->Password   = 'ifechukwudi2023';          
//                 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//                 // $mail->Port       = 587;                        
//                 $mail->Port       = 465;                           
            
//                 //Recipients
//                 $mail->setFrom('contact@charlycareclasic.com', 'User Contact');
//                 $mail->addAddress('charlycareclasic@gmail.com', 'Charlycare contact');               
//                 $mail->addReplyTo($contact_email, 'Sender');
            
//                 // Content
//                 $mail->isHTML(true);        
//                 $mail->Subject = $title;
//                 $mail->Body = $body;
                    
//                 $mail->send();
//                     $errMsg = "Thank you ".$contact_name . " for partnering with us."."\r\n"." Your Request is being considered and we will get back to you ASAP";
//                     $errMsgClass = "alert-success";
//                     $contact_name = $contact_email = $contact_msg = '';
//             } catch (Exception $e) {
//                 $errMsg = "Your email was not successful. Try again later";
//                 $errMsgClass = "alert-danger";
//                 exit();
//             }
//         }
//     }else{
//         $errMsg = "Please Fill in All Fields";
//         $errMsgClass = "alert-danger";
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="FundMeNaija"
      content="FundMeNaija website"
    />
    <!-- App Icon -->
     <link href="../assets/img/favicon-32x32.png" rel="icon">
    <link href="../assets/img/apple-icon-180x180.png" rel="apple-touch-icon">
    <title>FundMeNaija | Contact Us</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Main css -->
    <link href="../asserts/css/contact.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <header class='shadow-sm' style="background: backgroundColor">

        <div class="container d-flex justify-content-between align-items-center py-2 px-lg-5">
            <div class="d-flex align-items-center">
                <div style="width: 60px; height: 60px; position: relative;">
                    <img src="../assets/img/Logo3.png" alt="Logo" class="img-fluid" style="width: 100%; height: 100%; position: absolute" />
                </div>
                <div class="h4 text-white">Fundmenaija</div>
            </div>
            <ul class="list-unstyled desktop">
                <div class="d-flex align-items-center">
                    <li>
                        <a href='../auth/about.php' class='nav-link mx-lg-2 py-2 px-3' id='nav-link'>About</a>
                    </li>
                    <li>
                        <a href='../auth/contact.php' class="nav-link mx-lg-2 py-2 px-3" id='nav-link'>Contact</a>
                    </li>
                    <li>
                        <a href='../auth/donate.php' class="nav-link mx-lg-2 py-2 px-3" id='nav-link'>Donate</a>
                    </li>
                    <li>
                        <a href='../user/login.php' class="nav-link mx-lg-2 py-2 px-3" id='nav-link'>Sign in</a>
                    </li>
                    <li>
                        <button>
                            <a href="./user/createAccount.php"
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
                        <Link href='../auth/about.php'
                            class='nav-link my-3 text-white'>About
                        </Link>
                    </li>
                    <li>
                        <Link href='../auth/contact.php'
                            class='nav-link my-3 text-white'>Contact
                        </Link>
                    </li>
                    <li>
                        <Link href='../auth/donate.php'
                            class='nav-link my-3 text-white'>Donate
                        </Link>
                    </li>
                    <li>
                        <Link href='../user/login.php'
                            class='nav-link my-3 text-white'>Log in
                        </Link>
                    </li>
                    <li>
                        <Link href='../user/createAccount.php'
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
    <!-- <h2 class="container" style="margin-top: 300px;"><center>Contact us page loading soon...</center></h2> -->
    <div class="container">
    <div class="wrapper animated bounceInLeft">
            <div class="company-info">
                <h3 class="brand"><span>FundMeNaija</span> Contact Form</h3>
                <ul>
                    <li><i class="fas fa-address-book"></i>Lagos Nigeria</li>
                    <li><i class="fas fa-phone"></i> +2347-000-000-000</li>
                    <li><i class="fas fa-envelope"></i> contact@fundmenaija.com</li>
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




<?php
    include_once('../inc/footer.php');
    
?>