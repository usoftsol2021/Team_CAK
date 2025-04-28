<?php
/*include('admin/php-includes/connect.php');
include('admin/function.php');*/
include('admin/CAK/php-includes/connect.php');
include('admin/CAK/function.php');

$user_name=$_GET["oid"];
$phone_no=$_GET["cid"];
$email_id=$_GET["psa"];
$SUBJECT=$_GET["mval"];
$message=$_GET["mass"];
$myObj = new stdClass();
$cdate=date("Y-m-d");
$create_datetime=date("Y-m-d H:i:s a");
$sequence_id=rand();
if(insertContact($sequence_id,$user_name,$phone_no,$email_id,$message,$create_datetime,$cdate))
{
 /*$myObj->RESP_CODE = 1;
    $myObj->RESPONSE ="Thanks for contact us and our Representative will contact you soon";
	$myJSON = json_encode($myObj);*/	
	echo "1";	
}
else
{
/*$myObj->RESP_CODE = 0;
    $myObj->RESPONSE ="Message could not be sent.";
	$myJSON = json_encode($myObj);*/	
	echo "0";
}

//$mail = new PHPMailer;

/*// SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'helpaks2019@gmail.com';
$mail->Password = 'akssupport996';
$mail->SMTPSecure = 'ssl';
$mail->Port     = 465;
$mail->setFrom('helpaks2019@gmail.com', 'ASK Architecture');
$mail->addReplyTo('abhik9554@gmail.com', 'Abhimanyu');

// Add a recipient
$mail->addAddress('abhik9554@gmail.com');

// Email subject
$mail->Subject = $sub;

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = '<h2>Customer Details</h2><p>Name:'.$name.'</p><p>Mobile No:'.$phone.'</p><p>Email:'.$email.'</p><p>'.$mass.'</p>';
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
	 $myObj->RESP_CODE = 0;
    $myObj->RESPONSE ="Message could not be sent.";
	$myJSON = json_encode($myObj);	
	echo $myJSON;
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
     $myObj->RESP_CODE = 1;
    $myObj->RESPONSE ="Thanks for contact us and our Representative will contact you soon";
	$myJSON = json_encode($myObj);	
	echo $myJSON
	
}*/