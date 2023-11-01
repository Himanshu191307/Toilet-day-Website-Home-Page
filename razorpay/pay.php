<?php
ob_start();
session_start();
require('config.php');
require('razorpay-php/Razorpay.php');
$name = ucwords($_SESSION['name']);
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$city = ucwords($_SESSION['city']);
$desc = "Cash Donation to hygienethatempowers";
$total_amt = $_SESSION['total_amt'];
$receipts = $_SESSION['orderIDs'];

/*$name = ucwords($_POST['name']);
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = ucwords($_POST['city']);
$desc = "Cash Donation to hygienethatempowers";
$total_amt = $_POST['total_amt'];
$receipts = $_POST['orderIDs']; 


echo $_SESSION['total_amt']; 
echo $name = 'Sahcin';
echo $email = 'SachiN@gmail.com';
echo $phone = '9015790532';
echo $city = 'Gzb';
echo $desc = "Cash Donation to hygienethatempowers";
echo $total_amt = '100';
echo $receipts = $_SESSION['orderIDs']; die;*/
// Create the Razorpay Order
use Razorpay\Api\Api;
$api = new Api($keyId, $keySecret);
//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [ 
    'receipt'         => $receipts,
    'amount'          => $total_amt * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];
$razorpayOrder = $api->order->create($orderData);
$razorpayOrderId = $razorpayOrder['id'];
$_SESSION['razorpay_order_id'] = $razorpayOrderId;
$displayAmount = $amount = $orderData['amount'];
if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);
    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}
$checkout = 'automatic';
if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}
$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $name,
    "description"       => $desc,
    "image"             => "http://hygienethatempowers.com/images/logo-hindware-black.png",
    "prefill"           => [
    "name"              => $name,
    "email"             => $email,
    "contact"           => $phone,
    ],
    "notes"             => [
    "address"           => $city,
    "merchant_order_id" => $receipts,
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];
if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}
$json = json_encode($data);
require("checkout/{$checkout}.php");
