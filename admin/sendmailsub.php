<?php
session_start();
error_reporting(0);
include('includes/cofig1.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

if(isset($_POST['submit']))
  {
	 
$email=$_POST['mail'];
$sql="SELECT * from tblsubscribers";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{			
  $c=($result->SubscriberEmail);
	$to=$c;
$subject='Subscibers';
$body=$email;
$header='From:musicdownload.000webhostapp.com';

if(mail($to, $subject, $body ,$header))
{
	echo 'Email sent to '.$c;
}
else
{
	echo 'error';
}
	
	 
 }
 }	
 }
 echo "<script type='text/javascript'>window.location.href='manage-subscribers.php';</script>";
}
?>