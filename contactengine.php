<?php

$EmailFrom = "james@jamesfrazierdesign.com";
$EmailTo = "jamesfrazier81@gmail.com";
$Subject = "Submission from James Frazier Design";
$First = Trim(stripslashes($_POST['First']));
$Last = Trim(stripslashes($_POST['Last'])); 
$Email = Trim(stripslashes($_POST['Email']));
$Phone = Trim(stripslashes($_POST['Phone']));
$Organization = Trim(stripslashes($_POST['Organization'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "First Name: ";
$Body .= $First;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $Last;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Organization: ";
$Body .= $Organization;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>