<?php
## CONFIG ##
include("connectiondb.php");

# LIST EMAIL ADDRESS
$recipient = "Access.authorproficient@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Query Form Request";
// $ebpage = "App development";

# RESULT PAGE
$location = "/thankyou.php";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = "Access.authorproficient@gmail.com";

if(isset($_REQUEST['hiddencapcha']) && $_REQUEST['hiddencapcha'] == "" ){
  if(isset($_REQUEST['Name']) && $_REQUEST['Name'] != "" 
  && isset($_REQUEST['Email']) && $_REQUEST['Email'] != "" 
  && isset($_REQUEST['ctry']) && $_REQUEST['ctry'] != "" 
  && isset($_REQUEST['pc']) && $_REQUEST['pc'] != "" 
  && isset($_REQUEST['Number']) && $_REQUEST['Number'] != "" 
  // && isset($_REQUEST['Services']) && $_REQUEST['Services'] != ""
  )
  {
echo "abcd";
# MAIL BODY
$subscriber_email = $_REQUEST['Email'];
$subscriber_subject = "THANK YOU FOR CONTACTING ghostwritingxpert, ONE OF OUR CONSULTANTS WILL REACH YOU SOON.";
$subscriber_email_data = file_get_contents('http://www.ghostwritingxpert.com/email/queryFormThankyou.html');


$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
$body .= "ctry: ".$_REQUEST['ctry']." \n";
$body .= "pc: ".$_REQUEST['pc']." \n";
$body .= "Number: ".$_REQUEST['Number']." \n";
// $body .= "Services: ".$_REQUEST['Services']." \n";
// $body .= "Message: ".$_REQUEST['Message']." \n";

// $body .= "Page: ".$ebpage." \n";
// echo 
if (mysqli_connect_errno()){  echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
else{ $sql = 'insert into bannerform_query (Name,Email,country_code,country_name,Number,Form_name,cip,locationURL)  
  values ("'.$_REQUEST['Name'].'","'.$_REQUEST['Email'].'","'.$_REQUEST['pc'].'","'.$_REQUEST['ctry'].'","'.$_REQUEST['Number'].'","'.$_REQUEST['Form_name'].'","'.$_REQUEST['cip'].'","'.$_REQUEST['locationURL'].'")';
mysqli_query($con,$sql);
mysqli_close($con);
}

$headers = "From: " . $sender . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
# add more fields here if required
## SEND MESSGAE ##

mail( $recipient, $subject, $body,  "From: $sender" ) or die ("Mail could not be sent.");
mail( $subscriber_email, $subscriber_subject, $subscriber_email_data, $headers) or die ("Unable to send email to subscriber");

## SHOW RESULT PAGE ##
header( "Location: $location" );





    }
}
?>
