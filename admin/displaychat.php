
<?php
session_start();
error_reporting(0);
include('includes/cofig1.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	?>
<html>
<body>
<div  class="form-group">
 <div class="col-sm-8">
<?php 
$chatid=intval($_GET['chatid']);
$sql ="
SELECT chat.*,admin.* FROM chat join admin on admin.id=chat.admin WHERE  UserName='{$_SESSION['username']}' and User=:chatid  union
SELECT chat.*,admin.* FROM chat join admin on admin.id=chat.User WHERE UserName='{$_SESSION['username']}' and admin=:chatid   order by sendingDate asc";
$query= $dbh -> prepare($sql);
$query-> bindParam(':chatid', $chatid, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{
?>
	<p width="100%"> <span style="color:blue;">
<span><?php echo htmlentities($result->UserName);?>: </span>
	</span><?php echo htmlentities($result->chat);?><br>
          <span style="left:25%; position:absolute; font-size:small;" width="100%"><?php echo htmlentities($result->sendingDate);?></span>
    </p><br>
<?php }}}?>		
</div>
</div> 
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>