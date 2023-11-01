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
      <title>Manage Prodcut Donate</title>
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
                                 <h4>Prodcut Donate Enquiry</h4>
                              </a>
                           </div>
                        <!--<a href="csv/manage-students-csv.php" class="pull-right" title="Download All Data"><i class="fa fa-download downloadcsv" aria-hidden="true"></i></a>-->
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive" id="vikas">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr>
                                       <th>S.No.</th>                                       
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Phone</th> 
                                       <th>City </th> 	
										
										<th>Amt. </th> 
										<th>Payment Status </th> 
                                       <th>Date</th>
									    <th>Time</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       $a="1";
                                       $sql="SELECT * FROM `tbl_caste_donate` where 1=1 and form_name='Product Donation' ORDER BY `id` DESC";
                                       $run=mysqli_query($conn,$sql);
                                       while($row=mysqli_fetch_array($run)){?>
                                    <tr>
									<td><a href="javascript:void(0);"  data-toggle="modal" data-src="" data-target="#studentsdetails<?=$row['id'];?>"><?php echo $a; ?></a></td>
									<td><?php echo ucwords($row['name']); ?></td>
									<td><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></td>
									<td><?php echo $row['phone']; ?></td>
									<td><?php echo ucwords($row['city']); ?></td>
									<td><?php echo $row['amount']; ?></td>
								<?php if($row['payment_status']!=''){ ?>	<td><?php echo $row['payment_status']; ?></td> <?php } else { ?> <td> - </td> <?php } ?>
									<td><?php echo $row['date']; ?></td>
									<td><?php echo $row['time']; ?></td>
                                    </tr>
                                    <div class="modal fade" id="studentsdetails<?=$row['id'];?>" tabindex="-1" role="dialog" aria-hidden="true">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="modal-header modal-header-primary">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <p><b><?php echo ucwords($row['name']); ?></b></p>
                                             </div>
                                             <?php 
                                                $Name_sql="SELECT * FROM tbl_caste_donate WHERE id='".$row['id']."'";
                                                $Name_sql_run=mysqli_query($conn,$Name_sql);
                                                $Name_result=mysqli_fetch_array($Name_sql_run);   
                                                $bname=$Name_result['batch_name'];
                                                ?>
                                             <div class="modal-body">
                                                <div class="row">
                                                   <div class="col-md-12 Technical-Details-cantt">
                                                      <ul>
														<li>Name </li>
														<li><?php echo ucwords($row['name']); ?></li>
														<li>Email</li>
														<li><?php echo $row['email']; ?></li>
														<li>Phome</li>
														<li><?php echo $row['phone']; ?></li>
														<li>Address </li>
														<li><?php echo ucwords($row['address']); ?></li>
														<li>City </li>
														<li><?php echo ucwords($row['city']); ?></li>
														<li>State </li>
														<li><?php echo ucwords($row['state']); ?></li>
														<li>Pincode </li>
														<li><?php echo $row['pincode']; ?></li>
														<li>Amount </li>
														<li><?php echo $row['amount']; ?></li>
														<li>Payment Status </li>
													<?php if($row['payment_status']!=''){ ?>	<li><?php echo $row['payment_status']; ?></li> <?php } else { ?> <li> - </li> <?php } ?>
														<li>Date </li>
														<li><?php echo $row['date']; ?></li>
														<li>Time </li>
														<li><?php echo $row['time']; ?></li>
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
