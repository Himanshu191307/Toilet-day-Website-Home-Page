$sqlss="select name, email FROM evidya_registeration WHERE id = '".$OID."')"; 
$querys 	= mysqli_query($conn, $sqlss);
$result =  mysqli_fetch_array($querys);
$stu_email=$result['email'];
$stu_name=$result['name'];
  $email_to = $stu_email;
       $email_subject = "Thank You For Refer & Learn ";    
    $error_message = "";
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';    
   function clean_string($string) {
   $bad = array("content-type","bcc:","to:","cc:","href");
   return str_replace($bad,"",$string);
   }    
   $email_message .= "
   <html>
   <head>
       <title>HTML email</title>
     </head>
     <body>    
         <table style='background-color :#fff; padding: 5px 5px 5px 5px;'>
           <tr>";
            
            $email_message .= "<td> Welcome '".stu_name."' </td>\n";
            $email_message .= "</tr>
					<td>					
					You have made a great decision choosing us to help you add wings to your career by improving your skill set. <br>
We feel proud to welcome you to the eVidyapeeth family and hope that this course will give you an edge and help you in achieving your goals faster.<br>
We will share with you your batch details and schedule shorty. For any further queries you can write to us at info@evidyaeeth.in or else you can call us on 9999999999.<br>


				   <br><br>
					<b>Thanks,</b><br>
					Team eVidyapeeth
					</td>\n";
              $email_message .= "</tr>
         </table>
       </body>
   </html>
   ";
   // create email headers
   $email="info@evidyapeeth.in";
   $headers = 'From: '.$email."\r\n".
   'Reply-To: '.$email."\r\n" .
   'X-Mailer: PHP/' . phpversion();
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $checkmail=@mail($email_to, $email_subject, $email_message, $headers); 