	<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
<?php    
$sql = "SELECT * from  admin where UserName!='{$_SESSION['username']}'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{			
?>		
	
							<li><a href="chat.php?chatid=<?php echo $result->id;?>"><?php echo htmlentities($result->UserName);?></a></li>
						<?php }} ?>
			</ul>
		</nav>