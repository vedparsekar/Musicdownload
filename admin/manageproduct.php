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
$proname=$_POST['proname'];
$cn=$_POST['cn'];
$prodesc=$_POST['prodes'];
$price=$_POST['price'];
$st=$_POST['stock'];
$pimage=$_FILES["img"]["name"];
$pimage1=$_FILES["img1"]["name"];
$pimage2=$_FILES["img2"]["name"];
//$vimage2=$_FILES["img2"]["name"];
//$simage1=$_FILES["img1"]["name"];

move_uploaded_file($_FILES["img"]["tmp_name"],"proimg/".$_FILES["img"]["name"]);
move_uploaded_file($_FILES["img1"]["tmp_name"],"proimg/".$_FILES["img1"]["name"]);
move_uploaded_file($_FILES["img2"]["tmp_name"],"proimg/".$_FILES["img2"]["name"]);
//move_uploaded_file($_FILES["img2"]["tmp_name"],"mp3/".$_FILES["img2"]["name"]);

$sql="INSERT INTO product(productname,productdescription,Price,picture,picture1,picture2,catid,stock) VALUES(:proname,:prodesc,:price,:pimage,:pimage1,:pimage2,:cn,:st)";
$query = $dbh->prepare($sql);
$query->bindParam(':proname',$proname,PDO::PARAM_STR);
$query->bindParam(':cn',$cn,PDO::PARAM_STR);
$query->bindParam(':prodesc',$prodesc,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':st',$st,PDO::PARAM_STR);
$query->bindParam(':pimage',$pimage,PDO::PARAM_STR);
$query->bindParam(':pimage1',$pimage1,PDO::PARAM_STR);
$query->bindParam(':pimage2',$pimage2,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Song posted successfully";
}
else 
{
$error="Something went wrong. Please try again";
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
					
						<h2 class="page-title">Manage Product</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Product Name<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="proname" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Select Category<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="cn" required>
<option value=""> Select </option>
<?php $ret="select catid,procatname from procategory";
$query= $dbh -> prepare($ret);
//$query->bindParam(':catid',$catid, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->catid);?>"><?php echo htmlentities($result->procatname);?></option>
<?php }} ?>

</select>
</div>
</div>
											
<div class="hr-dashed"></div>




<div class="form-group">
<label class="col-sm-2 control-label">Product Description<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="prodes" rows="3" required></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Price<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="price" class="form-control" required>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Stock<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="stock" class="form-control" required>
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
Image1 <span style="color:red">*</span><input type="file" name="img" required>
</div>


<div class="form-group">
<div class="col-sm-4">
Image2 <span style="color:red">*</span><input type="file" name="img1" required>
</div>

<div class="form-group">
<div class="col-sm-4">
Image3 <span style="color:red">*</span><input type="file" name="img2" required>
</div>
<!--<div class="col-sm-4">
Mp3 file<span style="color:red">*</span><input type="file" name="img2" required>
</div>--> 

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