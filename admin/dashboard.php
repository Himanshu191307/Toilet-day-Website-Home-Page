<?php
 error_reporting(0);
 include('include/session_check.php');
 include('include/confing.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Dashboard | Hygienethatempowers</title>
      <!----===============================================---->
      <!-- css link section -->
          <?php include('include/css-link.php');?>
      <!----===============================================---->
      <style type="text/css">
         .clear{clear: both;}
      </style>
   </head>
   <body class="hold-transition sidebar-mini">
   
      <div class="wrapper">

                <?php include('include/header.php');?>
       
               <?php include('include/left-menu.php');?>
        
         <div class="content-wrapper">
            
            <section class="content">
               <div class="row">
			   
			  <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 style="font-size:16px;">Welcome :  <?php echo $_SESSION['admin_id']; ?></h2>
                  </div>-->
			   
                  <?php
                   $fetchemployee_sql="SELECT * FROM tbl_architect";
                   $fetchemployee_run=mysqli_query($conn,$fetchemployee_sql);
                   $fetchemployee_count=mysqli_num_rows($fetchemployee_run);
                  ?>
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <a href="manage_architect_enquiry.php">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-users fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $fetchemployee_count; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>Architect Enquiry</h3>
                        </div>
                     </div>
                     </a>
                  </div>
				  
				      <?php
                   $fetchemployee_sql="SELECT * FROM tbl_caste_donate where form_name='Cash Donation' ";
                   $fetchemployee_run=mysqli_query($conn,$fetchemployee_sql);
                   $fetchemployee_count=mysqli_num_rows($fetchemployee_run);
                  ?>
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <a href="manage_cash_donate_enquiry.php">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-users fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $fetchemployee_count; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>Cash Donation</h3>
                        </div>
                     </div>
                     </a>
                  </div>
				  
				   <?php
                   $fetchemployee_sql="SELECT * FROM tbl_caste_donate where form_name='Product Donation' ";
                   $fetchemployee_run=mysqli_query($conn,$fetchemployee_sql);
                   $fetchemployee_count=mysqli_num_rows($fetchemployee_run);
                  ?>
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <a href="manage_prodcut_donate_enquiry.php">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-users fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $fetchemployee_count; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>Prodcut Donation</h3>
                        </div>
                     </div>
                     </a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <?php
                      $fetchpartner_sql="SELECT * FROM tbl_enquiry";
                      $fetchpartner_run=mysqli_query($conn,$fetchpartner_sql);
                      $fetchpartner_count=mysqli_num_rows($fetchpartner_run);
                     ?>
                     <a href="manage_contact_enquiry.php">
                     <div id="cardbox2">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $fetchpartner_count; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>Contact Enquiry</h3>
                        </div>
                     </div>
                     </a>
                  </div>
                     <!--  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <?php
                      $fetchteam_sql="SELECT * FROM tbl_batches";
                      $fetchteam_run=mysqli_query($conn,$fetchteam_sql);
                      $fetchteam_count=mysqli_num_rows($fetchteam_run);
                     ?>
                     <a href="manage-batches.php">
                     <div id="cardbox3">
                        <div class="statistic-box">
                           <i class="fa fa-user-secret fa-3x"></i>
                           <div class="counter-number pull-right">
                              </i><span class="count-number"><?php echo $fetchteam_count; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>All   Batches</h3>
                        </div>
                     </div>
                     </a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <?php
                      $fetchtask_sql="SELECT * FROM tbl_newupdates";
                      $fetchtask_run=mysqli_query($conn,$fetchtask_sql);
                      $fetchtask_count=mysqli_num_rows($fetchtask_run);
                     ?>
                     <a href="manage-new-updates.php">
                     <div id="cardbox4">
                        <div class="statistic-box">
                           <i class="fa fa-files-o fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $fetchtask_count; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>New   Updates</h3>
                        </div>
                     </div>
                     </a>
                  </div>-->
               </div>
               <!-- /.row -->
               <div class="row">
                
               </div>

            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         
         <!----===============================================---->
         <!-- copyright link section -->
              <?php include('include/copyright.php');?>
         <!----===============================================---->

      </div>
      <!-- /.wrapper -->

      <!----===============================================---->
      <!-- js link section -->
          <?php include('include/js-link.php');?>
      <!----===============================================---->

   </body>

</html>

