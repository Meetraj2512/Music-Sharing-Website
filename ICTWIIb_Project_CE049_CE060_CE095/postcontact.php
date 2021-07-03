<?php
session_start();
if(isset($_POST['submit']))
{
  $user_id1 = $_POST['message-name'];
	$email_id=$_POST['message-email'];
  
	
	echo $user_id1;
	echo "<br/>";
	echo $email_id;
	echo "<br/>";

    $to = "meetrajdesai2512@gmail.com";
    $txt = "Hi, $user_id1";
    $headers = "From: personalsmeetrajdesai2512@gmail.com\r\n";
    $subject = "Thank You for visting Website";
    $msg=mail($to,$subject,$txt,$headers);
    if($msg){
      $_SESSION['msg'] = 'mail sent';
    }
    else{
    echo "mail was not sent!!";}
}
?>
