<?php
session_start();
error_reporting(0);
include('includes/cofig1.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_REQUEST['del']))
	{
$id=intval($_GET['del']);
$sql = "delete from tblsongs  WHERE  songid=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$msg="Song  record deleted successfully";
}



if(isset($_REQUEST['eid']))
	{
$eid=intval($_GET['eid']);
$Status="0";
$sql = "UPDATE tblsongs SET status=:Status WHERE  songid=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':Status',$Status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();

$msg="Song Successfully Inactive";
}


if(isset($_REQUEST['aeid']))
	{
$aeid=intval($_GET['aeid']);
$Status=1;

$sql = "UPDATE tblsongs SET status=:Status WHERE  songid=:aeid";
$query = $dbh->prepare($sql);
$query -> bindParam(':Status',$Status, PDO::PARAM_STR);
$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
$query -> execute();

$msg="song Successfully Active";
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
	
	<title>Music Download |Admin Manage Song   </title>

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

::-webkit-scrollbar {
    height: 3px;
}

::-webkit-scrollbar-track {
    background: #f2f2f2; 
}
 
::-webkit-scrollbar-thumb {
    background:  #cccccc; 
}


::-webkit-scrollbar-thumb:hover {
    background: #555; 
}
		</style>
		<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Not Confirm Songs</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Song Details</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
					<div style='overflow-y:auto;'>			<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
											<th>Song Title</th>
											<th>Category </th>
											<th>File</th>
											<th>Price</th>
											<th>Image</th>
											
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
										<th>Song Title</th>
											<th>Category</th>
											<th>File</th>
											<th>Price</th>
											
											<th>Image</th>
											
											<th>Action</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>

<?php
 $sql = "SELECT tblsongs.SongTitle,tblsongs.status,tblsongs.File,tblcat.catname,tblcat.cid,tblsongs.Price,tblsongs.songid from tblsongs join tblcat on tblcat.cid=tblsongs.cid where status='0'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->SongTitle);?></td>
											<td><?php echo htmlentities($result->catname);?></td>
		<td>
	<audio controls><source src="mp3/<?php echo htmlentities($result->File);?>" class="img-responsive" type="audio/mpeg"/> </audio> 
          
	    </td>
											<td><?php echo htmlentities($result->Price);?></td>
											<td><a href="javascript:void(0);" onClick="popUpWindow('http://localhost/Music_Downloadd/admin/songimage.php?imageid=<?php echo ($result->songid);?>');">View Image </a></td>
		<td><a href="edit-song.php?id=<?php echo $result->songid;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
<a href="notconfirm.php?del=<?php echo $result->songid;?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a>

<?php if($result->status=="" || $result->status==0)
{
	?><a href="notconfirm.php?aeid=<?php echo htmlentities($result->songid);?>" onclick="return confirm('Do you really want to Active')"> Active</a>
<?php } else {?>
<a href="notconfirm.php?eid=<?php echo htmlentities($result->songid);?>" onclick="return confirm('Do you really want to Inactive')"> Inactive</a>

</td>
	<?php } ?>	
	</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>

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
