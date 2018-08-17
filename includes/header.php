
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-0 col-md-0">
          <div class="logo"> <a href="index.php"><img src="assets/images/un.png" style="height: 50px; width: 50px;" alt="image"/></a></div>
        </div>
		<div class="col-sm-1 col-md-1">
          <div class="logo"><a href="index.php"><h4>Music Download</h4></a></div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
   <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
<?php }
else{ 

echo "Welcome To Music Download Website";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT uname FROM tblusers WHERE uemailid=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->uname); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            
            <li><a href="post-testimonial.php">Post a Song</a></li>
          <li><a href="my-testimonials.php">My Songs</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Update Password</a></li>
            
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Post a Song</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Songs</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sign Out</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form role="search" action="search.php" method="post"  id="header-search-form">
           <input type="text" class="form-control" name="Search" placeholder="Search"  class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a>    </li>
          <li><a href="topsongs.php">Songs</a>
		     <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
<li> <a href="#loginform"  data-toggle="modal" data-dismiss="modal">Contact Us</a> </li>
<?php }
else{
	?>
		  
          <li><a href="contact-us.php">Contact Us</a></li>
<?php }?>
<li><a href="paidsongs.php">Paid Songs</a></li>
		  <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories</a>
                      <ul class="dropdown-menu">
                          <li><a href="english.php">English Songs</a></li>
                          <li><a href="hindi.php">Hindi Songs</a></li>
                          <li><a href="pashtosongs.php">Pashto Songs</a></li>
                          <li><a href="darisongs.php">Dari Songs</a></li>
                          <li><a href="latestsongs.php">Latest songs</a></li>
                          
                          <li><a href="videos.php">Videos Songs</a></li>
						  
                     </ul>
          </li>
		  <li><a href="index1.php">Products</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>