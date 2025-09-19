<?php
/* PHP */

     include '../configuration/config.php';

    //add attribute element
    $client_id = $_GET['client_id'];
    $advocate_id = $_GET['advocate_id'];
    $date = $_GET['date'];
    $amount = $_GET['price'];
    $trans_id = $_GET['trans_id'];

    //notification attribure element
    $user_id_one = $_GET['client_id'];
    $user_id_two = $_GET['advocate_id'];
    $title_one = "Payment Successfully Done";
    $title_two = "Congrats ! New Payment Added - " . $amount;
    $des_one = "New Consultant Booking Done. Transaction ID is: " . $trans_id . " <br>Someone will contact you very soon";
    $des_two = "Someone need consult with you. Transaction ID is: " . $trans_id . " <br>Contact with him very soon";
    $datetime = date("Y-m-d H:i:s");

    // insert notification table
    $sql_one = "INSERT INTO notification(user_id,title,des,datetime) VALUE('$user_id_one','$title_one','$des_one','$datetime')";

    $sql_two = "INSERT INTO notification(user_id,title,des,datetime) VALUE('$user_id_two','$title_two','$des_two','$datetime')";

    //insert transaction table
    $sql_three = "INSERT INTO `transaction` (`client_id`, `advocate_id`, `paid_fees`, `transaction_code`, `date`) VALUE ('$client_id', '$advocate_id', '$amount', '$trans_id', '$date')";

    mysqli_query($conn, $sql_one) or die(mysqli_query($conn));
    mysqli_query($conn, $sql_two) or die(mysqli_query($conn));
    mysqli_query($conn, $sql_three) or die(mysqli_query($conn));




$post_data = array();
$post_data['store_id'] = "testc68cd3d086ba5f";
$post_data['store_passwd'] = "testc68cd3d086ba5f@ssl";
$post_data['total_amount'] = $_GET['price'];
$post_data['currency'] = "BDT";
$post_data['tran_id'] = $_GET['trans_id'];
$post_data['client_id'] = $_GET['client_id'];
$post_data['advocate_id'] = $_GET['advocate_id'];
$post_data['date'] = $_GET['date'];
$post_data['success_url'] = "http://localhost/ams/citizen/success.php";
$post_data['fail_url'] = "http://localhost/ams/citizen/fail.php";
$post_data['cancel_url'] = "http://localhost/new_sslcz_gw/cancel.php";
# $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE



# EMI INFO
$post_data['emi_option'] = "1";
$post_data['emi_max_inst_option'] = "9";
$post_data['emi_selected_inst'] = "9";

# CUSTOMER INFORMATION
$post_data['cus_name'] = "Test Customer";
$post_data['cus_email'] = "test@test.com";
$post_data['cus_add1'] = "Dhaka";
$post_data['cus_add2'] = "Dhaka";
$post_data['cus_city'] = "Dhaka";
$post_data['cus_state'] = "Dhaka";
$post_data['cus_postcode'] = "1000";
$post_data['cus_country'] = "Bangladesh";
$post_data['cus_phone'] = "01711111111";
$post_data['cus_fax'] = "01711111111";

# SHIPMENT INFORMATION
$post_data['ship_name'] = "testtestch7ua";
$post_data['ship_add1 '] = "Dhaka";
$post_data['ship_add2'] = "Dhaka";
$post_data['ship_city'] = "Dhaka";
$post_data['ship_state'] = "Dhaka";
$post_data['ship_postcode'] = "1000";
$post_data['ship_country'] = "Bangladesh";

# OPTIONAL PARAMETERS
$post_data['value_a'] = $_GET['client_id'];
$post_data['value_b '] = $_GET['advocate_id'];
$post_data['value_c '] = $_GET['trans_id'];

# CART PARAMETERS
$post_data['cart'] = json_encode(array(
    array("product"=>"DHK TO BRS AC A1","amount"=>"200.00"),
    array("product"=>"DHK TO BRS AC A2","amount"=>"200.00"),
    array("product"=>"DHK TO BRS AC A3","amount"=>"200.00"),
    array("product"=>"DHK TO BRS AC A4","amount"=>"200.00")
));
$post_data['product_amount'] = "100";
$post_data['vat'] = "5";
$post_data['discount_amount'] = "5";
$post_data['convenience_fee'] = "3";

# REQUEST SEND TO SSLCOMMERZ
$direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $direct_api_url );
curl_setopt($handle, CURLOPT_TIMEOUT, 30);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($handle, CURLOPT_POST, 1 );
curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


$content = curl_exec($handle );

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle))) {
    curl_close( $handle);
    $sslcommerzResponse = $content;
} else {
    curl_close( $handle);
    echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
    exit;
}

# PARSE THE JSON RESPONSE
$sslcz = json_decode($sslcommerzResponse, true );

if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
    # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
    # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
    echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
    # header("Location: ". $sslcz['GatewayPageURL']);
    exit;
} else {
    echo "JSON Data parsing error!";
}