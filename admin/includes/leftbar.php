	<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
<?php    
$sql = "SELECT * from  admin where UserName='{$_SESSION['username']}'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>		
<?php }} 

 if($result->astatus=="" || $result->astatus==0)
{
	?>
	
							<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			
						<li><a href="activeaddmins.php">Active Admins</a></li>			
<?php }
else{
	
?>				
				<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			
			<li><a href="#"><i class="fa fa-sitemap"></i>Admin</a>
					<ul>
						<li><a href="addadmin.php">Add Admin</a></li>
						<li><a href="manageadmins.php">Manage Admins</a></li>
						<li><a href="activeadmins.php">Active Admins</a></li>
						<li><a href="deactiveadmins.php">De active Admins</a></li>
					</ul>
				</li>
			
			
			
<li><a href="#"><i class="fa fa-files-o"></i> Categories</a>
<ul>
<li><a href="create-cat.php">Create Category</a></li>
<li><a href="manage-cat.php">Manage Categories</a></li>
</ul>
</li>

<li><a href="#"><i class="fa fa-files-o"></i> Artists</a>
<ul>
<li><a href="createart.php">Create Artist</a></li>
<li><a href="manageart.php">Manage Artists</a></li>
</ul>
</li>

<li><a href="#"><i class="fa fa-sitemap"></i> Song</a>
					<ul>
						<li><a href="post-asong.php">Post a Song</a></li>
						<li><a href="manage-song.php">Manage Admin Songs</a></li>
						<li><a href="usersongs.php">Manage Users Songs</a></li>
						<li><a href="paidsongs.php">Manage Paid Songs</a></li>
						<li><a href="notconfirm.php">Not confirm Songs</a></li>
					</ul>
				</li>
				
				
				<li><a href="#"><i class="fa fa-sitemap"></i> Videos</a>
					<ul>
						<li><a href="upload-video.php">Post a Video</a></li>
						<li><a href="manage-video.php">Manage Videos</a></li>
					</ul>
				</li>
				
				<li><a href="#"><i class="fa fa-table"></i> User Feedbacks</a>
					<ul>
					<li><a href="testimonials.php"> Manage Feedbacks</a></li>
						<li><a href="activefd.php">Active Feedbacks</a></li>
						<li><a href="notactivefd.php">Not Active Feedbacks</a></li>
					</ul>
				</li>

				
				<li><a href="#"><i class="fa fa-sitemap"></i> Contact Us Queries</a>
					<ul>
					<li><a href="manage-conactusquery.php"> Manage Conatctus Query</a></li>
						<li><a href="qunotans.php">Queries Not Answered</a></li>
						<li><a href="quans.php">Queries Answered</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="fa fa-files-o"></i>Paid Songs Requests</a>
					<ul>
						<li><a href="paidsongrequest.php"></i>Request Not Confirmed</a></li>
						<li><a href="requestnotcon.php">Request Confirmed</a></li>
					</ul>
		   </li>
				<li><a href="#"><i class="fa fa-sitemap"></i> Products</a>
					<ul>
						<li><a href="manageproduct.php">Add Products</a></li>
						<li><a href="emanageproduct.php">Manage Products</a></li>
						<li><a href="delivery.php">Product Delivery</a></li>
					</ul>
				</li>
				
				
				<li><a href="reg-users.php"><i class="fa fa-users"></i> Reg Users</a></li>
			<li><a href="manage-pages.php"><i class="fa fa-files-o"></i> Manage Pages</a></li>
			
			
		   
			<li><a href="manage-subscribers.php"><i class="fa fa-table"></i> Manage Subscribers</a></li>
			<li><a href="chatdashboard.php"><i class="fa fa-dashboard"></i>Admins Chat</a></li>
<?php }?>
			</ul>
		</nav>