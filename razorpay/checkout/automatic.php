<!--  The entire list of Checkout fields is available at
 https://docs.razorpay.com/docs/checkout-form#checkout-fields -->

<form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="<?=$_SESSION['orderIDs']?>"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <input type="submit" name="shopping_order_id" value="Pay Now" id="linkid" class="razorpay-payment-button">
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="<?=$_SESSION['orderIDs']?>">
</form>
<script>
window.onload=function(){
  document.getElementById("linkid").click();
};


</script>
<style>
.razorpay-payment-button{opacity: .0;}
.close {
    position: absolute;
    right: 0;
    top: 0;
    cursor: pointer;
    font-size: 18px;
    opacity: .0!important;
    width: 24px;
    text-align: center;
    line-height: 26px;
    z-index: 1;
}
</style>