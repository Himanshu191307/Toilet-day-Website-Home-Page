<?php ob_gzhandler();
session_start();
//echo $_SESSION['total_amt'];
$cpurl =$_SERVER['REQUEST_URI'];  
   $nurl= str_replace("/","",$cpurl); 
   //echo $redirecturl = similar_text(".php","",$cpurl);
   if(($nurl=='index.php') || ($nurl=='')){ $title="Hygienethatempowers"; 
   $keywords=""; $description=""; }
   if($nurl=='about.php'){ $title="About | Hygienethatempowers"; $keywords=""; $description=""; }
   if($nurl=='about.php'){ $title="About | Hygienethatempowers"; $keywords=""; $description=""; }
   if($nurl=='faq.php'){ $title="FAQ | Hygienethatempowers"; $keywords=""; $description=""; }
   if($nurl=='contact.php'){ $title="Contact Us | Hygienethatempowers"; $keywords=""; $description=""; }
   if($nurl=='donate.php'){ $title="Donate | Hygienethatempowers"; $keywords=""; $description=""; }
   if($nurl=='cash-donation.php'){ $title="Cash Donation | Hygienethatempowers"; $keywords=""; $description=""; }
   ?>
   <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<title> Hindware Build A Toilet Build Her Future - #HygieneThatEmpowers </title>
<meta name="description" content="Hindware decided to make hygiene accessible and empower the girl child. And that’s how the idea #hygienethatempowers was born..">

<meta name="keywords" content="sanitaryware, sanitaryware products, hygeine, girl child, hygienethatempowers, school toilets, build a toilet build her future">
<!-- Stylesheets -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="../images/favicon.png" type="image/x-icon">
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="../css/responsive.css" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-K6NQ5XS88Q"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

  gtag('config', 'G-K6NQ5XS88Q');

</script>
</head>
<body>
<div class="popup-btn">
    <a href="contact.php" style="display: block;">JOIN THE INITIATIVE</a>
  </div>

<div class="page-wrapper">    
  <!-- Main Header -->
  <header class="main-header header-style-one">    
    <!-- Header Upper -->
    <div class="header-upper">
      <div class="container-fluid">
        <div class="inner-container clearfix">        
         <div class="logo-box">
           <div class="logo"><a href="/" title=""><img src="../images/logo-hindware.png" alt="logo" title="" class="img-fluid"></a></div>
        </div>      
          <!--Nav Box-->
          <div class="nav-outer clearfix"> 
            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>            
            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md navbar-light">
              <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                <ul class="navigation clearfix">
                 
                  <li><a href="../about.php">About us</a>                   
                  </li>
                  <li><a href="../make-difference.php">Make a Difference</a>                   
                  </li>
                  <li><a href="../hygiene-heroes.php">Hygiene Heroes</a></li>
                  <li class="dropdown"><a href="#">Activations</a>
                     <ul>
                        <li><a href="../architect.php">Architect</a></li>
                        <!-- <li><a href="Architect.php#architect-design-download">Product Spec Download</a></li> -->
                      </ul> 
                  </li>
                   <li ><a href="../media.php">Media</a>
                  <li ><a href="../contact.php">Contact Us</a>
                   <!--  <ul>
                      <li><a href="contact.php">Query Form</a></li>
                     <li><a href="#">Facebook</a></li>
                      <li><a href="#">Instagram</a></li>
                    </ul> -->
                  </li>
                  <li class="dropdown"><a href="../contact.php" class="color-b">Join the initiative</a>
                    <ul>
                      <!-- <li><a href="product.php">Donate A Product</a></li> -->
                     <!--  <li><a href="#">Direct Contribution</a></li> -->
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>           
          </div>
        </div>
      </div>
    </div>
    <!--End Header Upper--> 
    
    <!-- Sticky Header  -->
    <div class="sticky-header">
      <div class="container-fluid clearfix"> 
        <!--Logo-->
        <div class="logo pull-left"> <a href="/" title=""><img src="../images/logo-hindware.png" class="img-fluid" alt="" title=""></a> </div>
        <!--Right Col-->
        <div class="pull-right"> 
          <!-- Main Menu -->
          <nav class="main-menu clearfix"> 
            <!--Keep This Empty / Menu will come through Javascript--> 
          </nav>
          <!-- Main Menu End--> 
        </div>
      </div>
    </div>
    <!-- End Sticky Menu --> 
    
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
      <nav class="menu-box">
        <div class="nav-logo"><a href="/"><img src="../images/logo-hindware.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <!--Social Links-->
    <!--     <div class="social-links">
          <ul class="clearfix">
            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
          </ul>
        </div> -->
      </nav>
    </div>
    <!-- End Mobile Menu --> 
  </header>
  <!-- End Main Header -->   