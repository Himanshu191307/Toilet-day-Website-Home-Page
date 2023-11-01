<!-- Main Footer -->
  <footer class="main-footer">
    <div class="image-layer" style="background-image:url('images/background/footer-bg.jpg')"></div>  
    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="auto-container">
        <div class="inner"> 
          <!--Copyright-->
          <div class="copyright">Copyrights (c) <?= date('Y');?> Hindware Build A Toilet Build Her Future. All rights reserved. | <a href="privacy-policy.php">Privacy Policy</a></a></div>
        </div>
      </div>
    </div>
  </footer>
</div>
<!--End pagewrapper--> 
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>
<link href="https://parsleyjs.org/src/parsley.css" rel="stylesheet">
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script> 
<script src="js/owl.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/scrollbar.js"></script> 
<script src="js/custom-script.js"></script>
<script src="https://parsleyjs.org/dist/parsley.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
window.Parsley.addValidator('palindrome', {
  validateString: function(value) {
    return value.split('').reverse().join('') === value;
  },
  messages: {
    en: 'This string is not the reverse of itself',
    fr: "Cette valeur n'est pas l'inverse d'elle même."
  }
});

window.Parsley.addValidator('multipleOf', {
  validateNumber: function(value, requirement) {
    return value % requirement === 0;
  },
  requirementType: 'integer',
  messages: {
    en: 'This value should be a multiple of %s.',
    fr: "Ce nombre n'est pas un multiple de %s."
  }
});

window.Parsley.addValidator('maxFileSize', {
  validateString: function(_value, maxSize, parsleyInstance) {
    if (!window.FormData) {
      alert('You are making all developpers in the world cringe. Upgrade your browser!');
      return true;
    }
    var files = parsleyInstance.$element[0].files;
    return files.length != 1  || files[0].size <= maxSize * 1024;
  },
  requirementType: 'integer',
  messages: {
    en: 'File/s uploaded should be lesser than 100 mb',
    fr: 'Ce fichier est plus grand que %s Kb.'
  }
});
</script>
<script>
    
$('#file-upload').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#file-upload')[0].files[0].name;
  $(this).prev('label').text(file);
});
</script>
<script>
  // form side bar
$( ".click" ).on('click', function() {
  $("body").toggleClass( "open" );
 });
$( ".reg" ).on('click', function() {
 $( 'body' ).toggleClass( "open" );
});
$(window).scroll(function() {
 if ($(this).scrollTop()>-50) {
    $('.right-buttion').fadeIn();
 } else {
    $('.right-buttion').fadeOut ();
 }
});

// cal
$( function() {
        $( "#datepicker" ).datepicker({
            numberOfMonths: 2
        });
    } );
$(document).ready(function() {
     $('#submitformdata').parsley();
	}); 
	 

  $(document).ready(function(){
         $('#submitformdata22').submit(function(event){
         event.preventDefault();
            $.ajax({         
     url: 'mails.php',
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
               success: function(data_resultdatas)
               {
                  if(data_resultdatas=="1")
                  {
   		             // $("#cuponecode").html(applycupondata_resultdatas);
                     $("#message5").html('<span style="color:green;font-weight:600;">Submit Successfully</span>');
   		            
                  }
                  else
                  {
                     $("#message5").html(data_resultdatas);
                  }
                  //$("#applynowform")[0].reset();
   	  
               }
           });
              return false;
         });
      });
</script>


</body>
</html>