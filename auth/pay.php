<?php
    include_once('../config.php');
    include_once('../inc/conn.php');
    $msg = '';
    $msgClass = '';
    // Fetch a single user id and update his DB based on transaction done
    ###$user_id = htmlspecialchars($_GET['user_id']); // make req to DB
    ###$issue_id = htmlspecialchars($_GET['issue_id']); // make req to DB

    if(isset($_POST['pay'])){
        echo "Payment processing...";
    }

    #### Fetching single post
    $user_id = mysqli_real_escape_string($conn, htmlspecialchars($_GET['user_id']));
    $issue_id = mysqli_real_escape_string($conn, htmlspecialchars($_GET['issue_id']));
    if(!$issue_id || !$user_id){
        header('location: ./donate.php');
    }
    $_SESSION['user_id'] = $user_id;
    $query_issue = "SELECT * FROM `_issues` WHERE `id`='$issue_id' AND `user_id`='$user_id' LIMIT 1";
    $result = mysqli_query($conn, $query_issue);
    $issue = array();
  
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $issue[] = $row;
            // var_dump($issue);
            // return;
        }
    }

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
    <!-- Favicons -->
    <link href="../assets/img/favicon-32x32.png" rel="icon">
    <link href="../assets/img/apple-icon-180x180.png" rel="apple-touch-icon">
    <title>FundMeNaija | Donate</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Main css -->
    <link  href="../asserts/css/preloader.css" rel="stylesheet">
    <link href="../asserts/css/styles.css" type="text/css" rel="stylesheet">
    <!-- <link href="../auth/asserts/css/donate.css" type="text/css" rel="stylesheet"> -->
    <!-- <link href="../auth/asserts/css/fundraiser.css" type="text/css" rel="stylesheet"> -->
    <!-- Payment Gateway -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/Cheetah-Speed-Technology/core-cdn@1.0.5/cdn.min.js"></script>

    <style>
        form{
            border-radius: 10px;
            color: white; 
        }
        #button{
            min-width: 100%;
            border-radius: 4px!important;
        }
        #button:hover{
            border: 1px solid white!important;
        }
    </style>
  </head>
  <body>
        <noscript>You need to enable JavaScript to run this app.</noscript>

        <section class='Donation'>
            <header class='shadow-sm'>
                <div class="container d-flex justify-content-between align-items-center py-2 px-lg-5">
                            <!--------------------- Logo --------------------->
                            <a href='../index.php' class="logo-container nav-link d-flex align-items-center">
                                <div style="width: 70px; height: 50px; position: relative;">
                                    <img src="../assets/img/Logo3.png" alt="Logo" class="img-fluid" style="width: 100%; height: 100%; position: absolute" />
                                </div>
                                <div class="logo h6 text-dark">FUNDMENAIJA</div>
                            </a>
                            <!-- -------------- Desktop screen menu  -------------- -->
                            <ul class="list-unstyled desktop">
                                <div class="d-flex align-items-center">
                                    <li>
                                        <a href='./about.php' class='nav-link text-dark mx-lg-2 py-2 px-3' id='nav-link'>About</a>
                                    </li>
                                    <li>
                                        <a href='./contact.php' class="nav-link text-dark mx-lg-2 py-2 px-3" id='nav-link'>Contact</a>
                                    </li>
                                    <li>
                                        <a href='./donate.php' class="nav-link text-dark mx-lg-2 py-2 px-3" id='nav-link'>Donate</a>
                                    </li>
                                    <li>
                                        <a href='../user/login.php' class="nav-link text-dark mx-lg-2 py-2 px-3" id='nav-link'>Sign in</a>
                                    </li>
                                    <li>
                                        <button>
                                            <a href="../user/createAccount.php"
                                                class="nav-link font-weight-bold text-white px-4">Sign up
                                            </a>
                                        </button>
                                    </li>
                                </div>
                            </ul>

                            <!-- -------------- Mobile screen menu  -------------- -->
                            <ul class="mobile">
                                <div class="d-flex font-weight-bold border-top">
                                    <li>
                                        <a href='./about.php' class='nav-link my-3 text-white'>About</a>
                                    </li>
                                    <li>
                                        <a href='./contact.php' class='nav-link my-3 text-white'>Contact</a>
                                    </li>
                                    <li>
                                        <a href='./donate.php' class='nav-link my-3 text-white'>Donate</a>
                                    </li>
                                    <li>
                                        <a href='../user/login.php' class='nav-link my-3 text-white'>Sign in </a>
                                    </li>
                                    <li>
                                        <a href='../user/createAccount.php' class='nav-link my-3 text-white'>Sign up </a>
                                    </li>
                                </div>
                            </ul>

                            <!-- ----------------- Hamburger menu ----------------- -->
                            <div class='hambuger' onClick="hamburger()">
                                <i class='menuIcon fa fa-bars text-dark fa-2x'></i>
                            </div>
                        </div>
                    </header>
                </div>
            </header>
    <!-- <div style="margin-top: 100px;"></div> -->
    <div class="row mx-3">
        <!-- <button id="button" style="padding: 10px 32px;">Proceed with Payment</button> -->
        <div style="margin: 130px auto 20px" class="col-md-6">
            <form class="form-group bg-dark p-3 border box-shadow">
                    <h3>Complete Your Donation</h3>
                    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                    <label for="u_name" class="form-label">Name</label>
                    <input type="text" id="u_name" class="form-control" placeholder="Donor's Full Name" title="Enter Your Full Names">
                    <!-- value="<?php echo isset($_POST['u_name']); ?>" -->
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" id="amount" step="2000" min="2000" min-length="2000" class="form-control" placeholder="Enter Amount" title="NOT LESS THAN 2000">
                    <br>
                    <input type="checkbox" name="robot" id="robot"> Not a Robot?
                    <br>
                    <br>
                    <button id="button" type="button" class="btn btn-block btn-warning text-white font-weight-bold" onclick="runIframe()" style="padding: 10px 32px;">Proceed with Payment</button>
                    <!-- <input id="button" type="button" class="btn btn-block btn-danger text-white font-weight-bold" onclick="runIframe()" style="padding: 10px 32px;" value="Proceed with Payment"> -->
                </form>
        </div>
    </div>
    <!-- <div style="margin-bottom: 100px;"></div> -->

    <div id="preloader"></div>
            
    <!--------------- Footer template --------------->
    <footer  style="background: #1e1e26; display: flex; justify-content: center">
        <div class="container p-4 d-lg-flex justify-content-between text-white">
            <span class='my-5'>
                <div class="d-flex align-items-center">
                    <div class='bg-danger1' style="width: 70px; height: 50px; position: relative;">
                        <img src="../assets/img/Logo3.png" alt="Logo" class="img-fluid" style="width: 100%; height: 100%; position: absolute" />
                    </div>
                    <div class="h6 text-white">FUNDMENAIJA</div>
                </div>
                <div class="social-icons m-4">
                    <i class='fab fa-facebook fa-1x'></i>
                    <i class='fab fa-instagram fa-1x mx-4'></i>
                    <i class='fab fa-twitter fa-1x'></i>
                </div>
            </span>

            <ul class="list-unstyled my-5 mx-lg-0 mx-3">
                <li class='my-2'>Home</li>
                <li class='my-2'>Contact</li>
                <li class='my-2'>Transfer fund</li>
            </ul>
            <ul class="list-unstyled my-5 mx-lg-0 mx-3">
                <li>Privacy policy</li>
                <li>Help</li>
            </ul>
        </div>
    </footer>
            

    <script src="../assets/js/main.js"></script>
    <script src='../authjs/index.js'></script>
        <!-- Payment Gateway -->
    <script type="text/javascript">
        let u_name = document.querySelector('#u_name');
        let amount = document.querySelector('#amount');
        let robot = document.querySelector('#robot');
        let alert = document.querySelector('.alert-error');
        // let runIframe = () => {
        //     console.log("testing function")
        //     if(u_name.value == '' || amount.value == ''){
        //         alert.innerHTML = "Error: Fill All Fields";
        //     }
        // }
        let runIframe = () => {
            // check values from FORM
            if(u_name.value != '' || amount.value != '' || amount.value >= 2000 || robot.value != ''){
                OurpassCheckout.openIframe({
                    api_key: "<?php echo API_KEY_PRIVATE_KEY_OURPASS; ?>",
                    subAccountAuthKey: 'auth_live_fgegsdgsdgsdgdsgd',
                    reference: 'OURPASS_ORDER_73aeefff68430210ae3a8e88ccfe2erbf214171',
                    amount: amount.value,
                    qty: 1,
                    name: 'Cap',
                    description: 'Great Pass Cap',
                    src: 'https://raw.githubusercontent.com/Cheetah-Speed-Technology/website_dstore/master/Cap-front1.png',
                    url: 'ourpass.co',
                    items: [
                        {
                            itemAmount: amount.value,
                            itemName: 'Cap',
                            itemWeight: 1,
                            itemQuantity: 1,
                            imageUrl: 'https://raw.githubusercontent.com/Cheetah-Speed-Technology/website_dstore/master/Cap-front1.png',
                            itemDescription: 'Cap',
                        },
                        // {
                        //     itemAmount: 500,
                        //     itemName: 'Free will',
                        //     itemWeight: 1,
                        //     itemQuantity: 1,
                        //     imageUrl: 'https://raw.githubusercontent.com/Cheetah-Speed-Technology/website_dstore/master/Cap-front1.png',
                        //     itemDescription: 'A',
                        //     itemDescription: 'An ananimous donation to cybergate',
                        // },
                    ],
                    metadata: {
                        name: 'MARIO GOTZE',
                    },
                    onSuccess: (res) => {
                        alert('Your Donate is Successful');
                    },
                    onClose: () => {
                        // Handle failed request either for try again with confirm
                        const answer = confirm('Your Donation Failed. Try Again?');
                        if(answer){
                            window.location.href = '#'
                        }else{
                            window.location.href = './donate.php'
                        }
                    },
                });
            }else{
                console.log(u_name.value, amount.value, robot.value);
                alert.innerHTML = "Error: Fill All Fields";
                
            }
        }
    </script>
        </section>
    </body>
</html>