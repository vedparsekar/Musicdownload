<html>
<body>
<?php 
include('cofig1.php');
error_reporting(0);
include('config.php');
error_reporting(0);


$email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword1=mt_rand(1000,10000);
$newpassword=md5($newpassword1);
  $sql ="SELECT uemailid FROM tblusers WHERE uemailid=:email and ucontactno=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tblusers set password=:newpassword,uaddress=:newpassword1 where uemailid=:email and ucontactno=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword1', $newpassword1, PDO::PARAM_STR);
$chngpwd1->execute();
echo "<script>alert('Email Sent');</script>";
}
else {
echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
}

$to=$email;
$subject='New password';
$body='Password-'.$newpassword1;
$header='From:musicdownload.000webhostapp.com';

if(mail($to, $subject, $body ,$header))
{
	echo 'Email sent to '.$email;
}
else
{
	echo 'error';
}

?>
</body>
</html>