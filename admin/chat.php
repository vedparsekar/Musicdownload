<?php
session_start();
error_reporting(0);
include('includes/cofig1.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
// Code for change password	
if(isset($_POST['submit']))
{
	
$Chat=$_POST['Chat'];
$admin=$_POST['admin'];
$user=$_POST['user'];
$sql="INSERT INTO  chat(chat,admin,User) VALUES(:Chat,:admin,:user)";
$query = $dbh->prepare($sql);
$query->bindParam(':Chat',$Chat,PDO::PARAM_STR);
$query->bindParam(':admin',$admin,PDO::PARAM_STR);
$query->bindParam(':user',$user,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
}
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Music Dpwnload | Admin Dashboard</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include('includes/header.php');?>

	<div class="ts-main-content">
<?php include('includes/chatleftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">
						<?php 
$chatid=intval($_GET['chatid']);
$sql ="SELECT id,emailid,UserName FROM admin WHERE id=:chatid ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':chatid', $chatid, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{
?>
	<p value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->UserName);?> Chat</p></h2>
	 <?php }}?>




<form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();">
										
											
  	        	  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
			
<?php include('displaychat.php');?>



			
<div class="form-group">
													   <div class="col-sm-8">
<?php 
$chatid=intval($_GET['chatid']);
$sql ="SELECT id,emailid,UserName FROM admin WHERE id=:chatid  ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':chatid', $chatid, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{
?>
	<input type="hidden" class="form-control" readonly name="user" value="<?php echo htmlentities($result->id);?>">
	 <?php }}?>		
</div>
</div> 



													  <div class="form-group">
													   <div class="col-sm-8">
<?php 
$sql ="SELECT id,emailid,UserName FROM admin WHERE UserName='{$_SESSION['username']}' ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{
?>
	<input type="hidden" class="form-control" readonly name="admin" value="<?php echo htmlentities($result->id);?>">
	 <?php }}?>		
</div> <br>
</div> <br>
											
											<div class="form-group">
												<div class="col-sm-8">
													<input type="text" class="form-control" name="Chat" id="category" required>
												</div>
												<button class="btn btn-primary" name="submit" type="submit">Send</button>
											</div>
											<div class="hr-dashed"></div>

										</form>




			</div>
		</div>
	</div>
	</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>
</html>
<?php }?>