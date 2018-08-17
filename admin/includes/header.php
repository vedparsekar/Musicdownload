<div class="brand clearfix">
	<a href="dashboard.php" style="font-size: 20px;">Music Download | Admin Panel</a>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			
			<li class="ts-account">
						<?php    
$sql = "SELECT * from  admin where UserName='{$_SESSION['username']}'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{			
?>
				<a href="#"><img style="height:40px;width:40px;" src="adminimg/<?php echo htmlentities($result->admimg);?>" class="ts-avatar hidden-side" alt=""><?php echo htmlentities($result->UserName);?> <i class="fa fa-angle-down hidden-side"></i></a>
<?php }}?>
				<ul>
					<li><a href="change-password.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
