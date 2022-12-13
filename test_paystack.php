<?php
    // $ref = $_GET['reference'];
    // if ($ref == ''){
    //     header('location: javascript://history.go(-1)');
    // }
?>
<?php
  // $curl = curl_init();
  
  // curl_setopt_array($curl, array(
  //   CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
  //   CURLOPT_RETURNTRANSFER => true,
  //   CURLOPT_ENCODING => "",
  //   CURLOPT_MAXREDIRS => 10,
  //   CURLOPT_TIMEOUT => 30,
  //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //   CURLOPT_CUSTOMREQUEST => "GET",
  //   CURLOPT_HTTPHEADER => array(
  //     "Authorization: Bearer sk_test_8eaa9fcfe4da441fbf81db8aa689f23d82d5a685",
  //     "Cache-Control: no-cache",
  //   ),
  // ));
  
  // $response = curl_exec($curl);
  // $err = curl_error($curl);

  // curl_close($curl);
  
  // if ($err) {
  //   echo "cURL Error #:" . $err;
  // } else {
  //   // echo $response;
  //   $result = json_decode($response);
  // }
  // if($result->data->status == 'success'){

  //   $status = $result->data->status;
  //   $reference = $result->data->reference;
  //   $last_name = $result->data->customer->last_name;
  //   $first_name = $result->data->customer->first_name;
  //   $full_name = $first_name." ".$last_name;
  //   $email = $result->data->customer->email;

  //   date_default_timezone_set('Africa/Lagos');

  //   $date_time = date('m/d/y h:i:s a', time());

    // Insert Data into DB
    // $stmt = $conn->prepare('INSERT INTO `transaction` VALUES (?,?,?,?)'); // insert data
    // $stmt->bind_param('sssss', $variables);
    // $stmt->execute();

    // if($stmt){
        // success
        // header('location: ./auth/success.php?status=success');
        // exit;
    // }else{
        // Fail
        // echo "Error: ". mysqli_error($conn);
        // exit;
        // die("Payment could not be Saved");
    // }
    // $stmt->close();
    // $conn->close();


  // }else{
  //   echo "An Error with your payment";
  //   header('location: ./auth/error.php');
  // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paystack API Test</title>
</head>
<body>
<form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" required />
  </div>
  <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" />
  </div>
  <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>

<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
    e.preventDefault();

    let handler = PaystackPop.setup({
        key: 'pk_test_400dc6fa6473e00bef61e62ab26752d0f57be1fb', // Replace with your public key
        email: document.getElementById("email-address").value,
        amount: document.getElementById("amount").value * 100,
        ref: 'CY'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function(){
            alert('Window closed.');
        },
        callback: function(response){
            let message = 'Payment complete! Reference: ' + response.reference;
            alert(message);
            windon.location = 'http://localhost/fundMeNaija/paystack.php'+ response.reference;
        }
    });

    handler.openIframe();
    }
</script>
<script src="https://js.paystack.co/v1/inline.js"></script> 
</body>
</html>