<?php
require('confing_our.php');
require('config.php');
//session_start();
error_reporting(0);
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
$success = true;
$error = "Payment Failed";
require('header.php');
$error_message = "";
?>
   <section class="page-banner" style="padding: 15px 0px 175px;">
        <!--<div class="image-layer about-img-before" style="background-image: url(images/tolit-day-bg-img.jpg); "></div>

        <div class="auto-container">
            <h1>Cash Donation</h1>
        </div> -->
    </section>
    <!--End Banner Section -->
<section class="contact-page info-container py-60 " style="background-color: #F9F7F6">
  <div class="auto-container" style="min-height:400px;">
    <div class="row clearfix"> 
         <div class="col-md-12">
            <?php
               if (empty($_POST['razorpay_payment_id']) === false)
               {
                   $api = new Api($keyId, $keySecret);
                   try
                   {
                       // Please note that the razorpay order ID must
                       // come from a trusted source (session here, but
                       // could be database or something else)
                       $attributes = array(
                           'razorpay_order_id' => $_SESSION['razorpay_order_id'],
                           'razorpay_payment_id' => $_POST['razorpay_payment_id'],
                           'razorpay_signature' => $_POST['razorpay_signature']
                       );
                       $api->utility->verifyPaymentSignature($attributes);
                   }
                   catch(SignatureVerificationError $e)
                   {
                       $success = false;
                       $error = 'Razorpay Error : ' . $e->getMessage();
                   }
               }
               $OID= str_replace("HTT","",$_POST['shopping_order_id']);
               $html = '';
               if ($success === true) 
               {
                   $html = "<p><b>	 Dear Subscriber,</b></p>
               		<p>Thank You for making a payment.</p>
               		<p>Your Payment ID: {$_POST['razorpay_payment_id']}</p>
               		<p><br>Sincerely,<br>
               		Team Hygienethatempowers
               		<br><img src='http://hygienethatempowers.com/images/logo-hindware-black.png'>
               		</p>";
               			$addbatches_sql="Update tbl_caste_donate set
               					payment_status  =  'Success' where
               					id           =  '".$OID."'";
                   $addbatches_run=mysqli_query($conn,$addbatches_sql);
               	//unset($_SESSION['orderID']);
               	//session_destroy();
               }
               else
               {
                  $html = "<p><b> Dear Subscriber,</b></p>
               		<p>We are sorry, but your payment for the applied course with transaction id {$error} could not be processed. Please quote your transaction id for any query relating to this request. Happy to help! </p>
               		<p><br>Sincerely,<br>
               		Team Hygienethatempowers</p>
               		<br>
               <img src='http://hygienethatempowers.com/images/logo-hindware-black.png'>
               		";
               		echo	$addbatches_sql="Update tbl_caste_donate set
               					payment_status  =  'Failed' where
               					id           =  '".$OID."'";
                   $addbatches_run=mysqli_query($conn,$addbatches_sql);
               	//unset($_SESSION['orderID']);
               	session_destroy();
               }
               //echo '<pre>';
               //print_r($OID);
               echo $html;
               ?>
         </div>
      </div>
   </div>
</section>
<?php require('footer.php');