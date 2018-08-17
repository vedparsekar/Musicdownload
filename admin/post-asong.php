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
$songtitle=$_POST['songtitle'];
$cn=$_POST['cn'];
$sov=$_POST['sov']; //lyrics
$admin=$_POST['admin'];
$price=$_POST['price'];
$simage=$_FILES["img"]["name"];
$vimage2=$_FILES["img2"]["name"];


move_uploaded_file($_FILES["img"]["tmp_name"],"img/".$_FILES["img"]["name"]);
move_uploaded_file($_FILES["img2"]["tmp_name"],"mp3/".$_FILES["img2"]["name"]);

$sql="INSERT INTO tblsongs(SongTitle,cid,status,lyrics,Price,simage,File,aid) VALUES(:songtitle,:cn,1,:sov,:price,:simage,:vimage2,:admin)";

$query = $dbh->prepare($sql);
$query->bindParam(':songtitle',$songtitle,PDO::PARAM_STR);
$query->bindParam(':cn',$cn,PDO::PARAM_STR);
$query->bindParam(':sov',$sov,PDO::PARAM_STR);
$query->bindParam(':admin',$admin,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);

$query->bindParam(':simage',$simage,PDO::PARAM_STR);
$query->bindParam(':vimage2',$vimage2,PDO::PARAM_STR);
$query->execute();

//second table

$lastInsertId = $dbh->lastInsertId();

if($lastInsertId)
{
$msg="Song posted successfully";
}
else 
{
$error="went wrong";
}

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
	
	<title>Music Download | Admin Post Song</title>

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
	
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Post A Song</h2>
						
						
			
				</div>		
					</div>
					
					
					
					
					
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group">
<label class="col-sm-2 control-label">Song Title<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="songtitle" class="form-control" required>
</div>

<label class="col-sm-2 control-label">Select Category<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="cn" required>
<option value=""> Select </option>
<?php $ret="select cid,catname from tblcat";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->cid);?>"><?php echo htmlentities($result->catname);?></option>
<?php }} ?>

</select>
</div>
</div>
											
<div class="hr-dashed"></div>




<div class="form-group">
<label class="col-sm-2 control-label">Song Lyrics<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="sov" rows="3" required></textarea>
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Price(in USD)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="price" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Select Artist<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="artist" required>
<option value=""> Select </option>
<?php
if(isset($_POST['submit']))
  {
$artist=$_POST['artist'];

$sql="INSERT INTO song_artist(artid,songid) VALUES(:artist,'$lastInsertId')";
$query = $dbh->prepare($sql);
$query->bindParam(':artist',$artist,PDO::PARAM_STR);
//$query->bindParam(':sid',$sid,PDO::PARAM_STR);

$query->execute();
  }

 $ret="select artid,artistname from artist";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->artid);?>"><?php echo htmlentities($result->artistname);?></option>
<?php }} ?>

</select>
</div>
</div>



<div class="hr-dashed"></div>


<div class="form-group">
<div class="col-sm-12">
<h4><b>Upload Files</b></h4>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
Image <span style="color:red">*</span><input type="file" name="img" required>
</div>
<div class="col-sm-4">
Mp3 file<span style="color:red">*</span><input type="file" name="img2" required>
</div> 
<div class="col-sm-4">
Manager Name: <span style="color:red"></span>
<select class="form-control1" name="admin">
<?php 
$sql ="SELECT id,emailid,UserName FROM admin WHERE UserName='{$_SESSION['username']}' ";//WHERE UserName=:email
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{
?>
<option  value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->UserName);?></option>
<?php }} ?>

	</select>
</div>


</div>
</div>

<div class="hr-dashed"></div>									
</div>
</div>
</div>
</div>
</div>
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
						
					

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
</body>
</html>
<?php } ?>