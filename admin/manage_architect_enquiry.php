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
      <title>Manage Architect Enquiry</title>
      <?php include('include/css-link.php');?>
      <style type="text/css">
         #printer{font-weight: 600;color:black;font-size: 30px;margin-right: 10px;cursor: pointer;}
         #printer:hover{color: green;}
      </style>
   </head>
   <body class="hold-transition sidebar-mini">
      <div class="wrapper">
         <?php include('include/header.php');?>
         <?php include('include/left-menu.php');?>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <div class="content-wrapper">
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <?php
                        if(@$_GET['result']=="Deleted"){
                          echo('<span style="color:red;font-weight:600;">Successfully Deleted...!!</span>');
                        }
                        if(@$_GET['error']=="404"){
                          echo('<span style="color:red;font-weight:600;">Somthing is wrong...!!</span>');
                        }
                        ?>
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group buttonexport">
                              <a href="#">
                                 <h4>Manage Architect Enquiry</h4>
                              </a>
                           </div>
                        <!--<a href="csv/manage-students-csv.php" class="pull-right" title="Download All Data"><i class="fa fa-download downloadcsv" aria-hidden="true"></i></a>-->
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive" id="vikas">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr>
                                       <th>S.No.</th>                            <th>Architect Name</th>           
                                       <th>Firm Name</th>
                                       <th>Email</th>
                                       <th>Phone</th> 
                                       <th>Design</th> 
                                       						   
                                       <th>Date</th>
									  
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       $a="1";
                                       $sql="SELECT * FROM `tbl_architect` where 1=1 ORDER BY `id` DESC";
                                       $run=mysqli_query($conn,$sql);
                                       while($row=mysqli_fetch_array($run)){?>
                                    <tr>
                                       <td><a href="javascript:void(0);"  data-toggle="modal" data-src="" data-target="#studentsdetails<?=$row['id'];?>"><?php echo $a; ?></a></td>
                                       <td><?php echo ucwords($row['architect_name']); ?></td>
                                        <td><?php echo ucwords($row['full_name']); ?></td>
                                       <td><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></td>
                                       <td><?php echo $row['phone']; ?></td>
                                       <td><a href="https://hygienethatempowers.com/designs/<?php echo $row['design']; ?>" target="_blank">View</a></td>
                                      
                                        <td><?php echo $row['date']; ?> <?php echo $row['time']; ?></td>
										 <td></td>
                                    </tr>
                                    <div class="modal fade" id="studentsdetails<?=$row['id'];?>" tabindex="-1" role="dialog" aria-hidden="true">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="modal-header modal-header-primary">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <p><b><?php echo ucwords($row['name']); ?></b></p>
                                             </div>
                                             <?php 
                                                $Name_sql="SELECT * FROM tbl_donate WHERE id='".$row['id']."'";
                                                $Name_sql_run=mysqli_query($conn,$Name_sql);
                                                $Name_result=mysqli_fetch_array($Name_sql_run);   
                                                $bname=$Name_result['batch_name'];
                                                ?>
                                             <div class="modal-body">
                                                <div class="row">
                                                   <div class="col-md-12 Technical-Details-cantt">
                                                      <ul>
														<li>Name *</li>
														<li><?php echo ucwords($row['name']); ?></li>
														<li>Address *</li>
														<li><?php echo ucwords($row['address']); ?></li>
														<li>Email address *</li>
														<li><?php echo $row['email']; ?></li>
														<li>Mobile Number *</li>
														<li><?php echo $row['phone']; ?></li>
														<li>Smartphone Brand *</li>
														<li><?php echo $row['phone_brand']; ?></li>
														<li>Smartphone Model *</li>
														<li><?php echo $row['phone_model']; ?></li>
														<?php  if($row['phone_type']!=''){?> 
														<li>Phone Type *</li>
														<li><?php echo $row['phone_type']; ?></li>
														<?php } ?>
														<?php  if($row['purchase_reference_no']!=''){?> 
														<li>Purchase Reference No. *</li>
														<li><?php echo $row['purchase_reference_no']; ?></li>
														<?php } ?>
														<?php  if($row['purchase_reference_image']!=''){?> 
														<li>Purchase Receipt *</li>
														<li><a href="http://phoneuthaoclasseschalao.com/mobilereceipt/<?php echo $row['purchase_reference_image']; ?>" target='blank'> View</a></li>
														<?php } ?>
														<?php  if($row['imei_no']!=''){?> 
														<li>IMEI Number *</li>
														<li><?php echo $row['imei_no']; ?></li>
														<?php } ?>
														<?php  if($row['have_rest_your_smartphone']!=''){?> 
														<li>Have you reset your smartphone? *</li>
														<li><?php echo $row['have_rest_your_smartphone']; ?></li>
														<?php } ?>
														<?php  if($row['major_cosmetic_damage']!=''){?> 
														<li>Is there any major cosmetic damage? *</li>
														<li><?php echo $row['major_cosmetic_damage']; ?></li>
														<?php } ?>
														<?php  if($row['charger_provided']!=''){?> 
														<li>Charger Provided *</li>
									                  
														<li><?php echo $row['charger_provided']; ?></li>
														<?php } ?>
														<?php  if($row['box_provided']!=''){?> 
														<li>Box Provided *</li>
														
														<li><?php echo $row['box_provided']; ?></li>
														<?php } ?>
														<?php  if($row['any_other_accessorie_provided']!=''){?> 
														<li>Any other accessories provided? *</li>
														<li><?php echo $row['any_other_accessorie_provided']; ?></li>
														<?php } ?>
														<?php  if($row['packed_phone']!=''){?> 	
														<li>Have you packed the phone?  *</li>
														<li><?php echo $row['packed_phone']; ?></li>
														<?php } ?>
														<?php  if($row['couriered_mode']!=''){?> 	
														<li>Do you want to courier the phone or should we collect it?   *</li>
														<li><?php echo $row['couriered_mode']; ?></li>
														<?php } ?>
														<?php  if($row['couriered_to']!=''){?> 	
														<li>	Couriered To On this address</li>
														<li><?php echo $row['couriered_to']; ?></li>
														<?php } ?>
														<?php  if($row['my_anchor_receving']!=''){?> 		
														<li>Do you consent to donate your smartphone to MA. My Anchor for the Smartphone Library? *</li>
														<li><?php echo $row['my_anchor_receving']; ?></li>
														<?php } ?>
														<?php  if($row['collecting_your_smartphone']!=''){?> 								
														<li>Are you comfortable with our logistics partners collecting your smartphone? *</li>
														<li><?php echo $row['collecting_your_smartphone']; ?></li>
														<?php } ?>

														
														<?php  if($row['pickup_day']!=''){?> 						
														<li>When should our logistics partner collect your smartphone?*</li>
														<li><?php echo $row['pickup_day']; ?></li>
														<?php } ?>
														<?php  if($row['preferred_time_slot']!=''){?> 				
														<li>Preferred Time Slot *</li>														 
														<li><?php echo $row['preferred_time_slot']; ?></li>
														<?php } ?>
														<?php  if($row['pick_up_address']!=''){?> 				
														<li>Pick-up Address * </li>
														<li><?php echo $row['pick_up_address']; ?></li>
														<?php } ?>
														<?php  if($row['feedback']!=''){?> 					
														<li>Feedback *</li>
														<li><?php echo $row['feedback']; ?></li>
														<?php } ?>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php $a++; }?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Modal -->    
            </section>
         </div>
         <?php include('include/copyright.php');?>
      </div>
      <?php include('include/js-link.php');?>
      <script>
         $(document).ready(function(){
           $(".printValue").click(function(){
               $("#submitForm").submit();
           });
         });
      </script>
   </body>
</html>
