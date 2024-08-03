<?php

$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
//$city = $_POST['city'];
$massage = $_POST['massage'];
$submit = $_POST['Submit'];


# Email to Form Owner

$emailSubject = "Enquiry From DJV Movies Website";

$emailBody = "Hello, \n \n Details of Enquiry at our website. \n \n 
 Name : $name  \n  
 Contact : $contact   \n 

 E-mail : $email \n 
 
 Massage : $massage \n
  \n \n  \n  Thank You.";

$emailTo = "djvmovies@gmail.com";


$emailFrom = "info@djvmovies.com";

$emailHeader = "From: $emailFrom\n"
        . "Bcc:<softechgrow@gmail.com>" . "\n"
        . "MIME-Version: 1.0\n"
        . "Content-type: text/plain; charset=\"ISO-8859-1\"\n"
        . "Content-transfer-encoding: 8bit\n";

// validate contact email
if (!is_numeric($contact) || (strlen($contact) != 10) || (empty($contact)) ) {
    // Error
        //echo" error";
        echo "<script type = text/javascript> {alert('Sorry. Some Error Occured. Please Check your Number and submit the form again.');}</script>";
        echo "<script language = javascript> location.href='javascript:history.go(-1)';</script>";
        exit();
        
        
    } else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email) || empty($email)) {
        echo "<script type = text/javascript> {alert('Sorry. Some Error Occured. Please Check your email and submit the form again.');}</script>";
        echo "<script language = javascript> location.href='javascript:history.go(-1)';</script>";
        exit();
    
    }else /* validate contact email*/
    if(mail($emailTo, $emailSubject, $emailBody, $emailHeader)){
        echo "<script type = text/javascript> {alert('Thank You For Submitting Enquiry Form. We Will Get Back To You Soon !!! ');}</script>";
        echo "<script language = javascript> location.href='index.html';</script>";
        exit();
    }else{
        echo "<script type = text/javascript> {alert(' Sorry. Some Error Occured. Please submit the form again.');}</script>";
        echo "<script language = javascript> location.href='javascript:history.go(-1)';</script>";
        exit();
}




?>