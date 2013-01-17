<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php 


   {
    
    
  	if ($_POST['name'] != NULL) die ("you filled out a field that should have been left blank which means you are probably a spam bot. If you are a real human, please return to the form and leave the first field blank.");
    
    }
    

$formName = $_GET['formName'];

$subject = $_GET['formName']. " - from Schantz Mobile App"; 
$name = $_GET['actualName']; 
$business = $_GET['business']; 
$email = $_GET['email']; 
$date = $_GET['date']; 
$description = $_GET['description']; 

 if ($email==NULL) 	{ $email='no email supplied';}	


echo "Thanks ". $name. " from ". $business. ". We'll send the certificate to ". $email. ".";

?>







<?php 


$message = 

"<br><br>". 

"<strong>Form Used:</strong> ". $subject. "<br><br>".
"<strong>Name:</strong> ". $name. "<br><br>".
"<strong>Business:</strong> ". $business. "<br><br>".
"<strong>Email:</strong> ". $email. "<br><br>";


if ($formName == "Report a Claim") {
$message.=
"<strong>Date of incident:</strong> ". $date. "<br><br>".
"<strong>Description:</strong> ". $description. "<br><br>";
}


if ($formName == "Request a Policy Change") {
$message.=
"<strong>Date of change:</strong> ". $date. "<br><br>".
"<strong>Description:</strong> ". $description. "<br><br>";
}


if ($formName == "Request a Quote") {
$message.=
"<strong>Date coverage to begin:</strong> ". $date. "<br><br>".
"<strong>Description:</strong> ". $description. "<br><br>";
}






 $headers = "From: " .$email.  "\r\n".
    "Reply-To: " .$email. "\r\n".
    "Content-type: text/html". "\r\n".
    'X-Mailer: PHP/' . phpversion();
    
    mail("michaeltigue@gmail.com", "$subject", "$message", "$headers" );

?>




</body>

</html>
