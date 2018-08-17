
<?php 

include('includes/cofig1.php');
error_reporting(0);

?>
<?php 
session_start();
include('config.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">

<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">





<!-- Custom Theme files -->
<!--theme style-->
<link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js1/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js1/simpleCart.min.js"> </script>
<!-- start menu -->

<script type="text/javascript" src="js1/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 
<!--header-->	
<script src="js1/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
  <!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

  <script src="js/bootstrap.js"> </script>
  
  
  <?php
			 $email=$_SESSION['login'];
$sql ="SELECT * FROM tblusers where uemailid='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
	 $u=$row['userid'];
	 
 }
 }	
$sql = "SELECT sum(total),count(proid),sum(quantity) FROM user_cart where userid=$u and cartstatus=0";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  
    while($row = $result->fetch_assoc()) {
			 
			 if($row["count(proid)"]>0)
			 {
				 $p=$row["sum(quantity)"]; 
			 
			 $ps=$row["sum(total)"]+150;
			 }
			 else
			 {
				 $ps=0;
			 $p=0;
			 }
			echo' <div class="cart box_1">
				 <a href="cart.php">
					<div class="total">
					<span class=""></span>Rs '.$ps.' ('.$p.')'.'</span></div>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty"></a></p>
					</a>
				<p><a class="simpleCart_empty" href="emptycart.php"><button class="btn btn-xs">Empty Cart</button></a></p>
			 	<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
</div>';
	}
}
else
	echo' <div class="cart box_1">
				 <a href="cart.php">
					<div class="total">
					<span class=""></span>Rs 0</span></div>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty"></a></p>
					</a>
				<p><a class="simpleCart_empty" href="emptycart.php"><button class="btn btn-xs">Empty Cart</button></a></p>
			 	<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
</div>';
	

?>
<div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				 <div class="banner1">				  
					  <div class="banner-info">
					  <h3>Hot New Arrivals</h3>
					  <p>Redefining value for money | Special Introductory Prices</p>
					  </div>
				 </div>
	         </li>
	         <li>
				 <div class="banner2">
					 <div class="banner-info">
					 <h3>Hot New Arrivals</h3>
					  <p>Redefining value for money | Special Introductory Prices</p>
					 </div>
				 </div>
			 </li>
	         <li>
	             <div class="banner3">
	        	 <div class="banner-info">
	        	 <h3>Hot New Arrivals</h3>
					  <p>Redefining value for money | Special Introductory Prices</p>
				 </div>
				 </div>
	         </li>
	      </ul>
	  </div>
  </div>
<!---->


 
<div class="items">

	 <div class="container">
	 <h5>String instruments</h5>
		 <div class="items-sec">
		 <?php
$sql = "SELECT * FROM product where catid=1 order by proid desc limit 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


   
  
    while($row = $result->fetch_assoc()) {
		  $c=$row['proid']; 
			 echo'<div class="col-md-3 feature-grid">'.
				 "<a href='single.php?id=$c'>".'<img src="admin/proimg/'.$row["picture"].'" style="height:260px;" />	
					 <div class="arrival-info">
						 <h4>'.$row["productname"].'</h4>
						 <p>Rs '.$row["price"].'</p>
						 <span class="pric1"><del>Rs 18000</del></span>
						 <span class="disc">[12% Off]</span>
					 </div>
					 <div class="viw">'.
						"<a href='single.php?id=$c'>".'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>';
			 }

}
  else {
    echo "0 results";
}
echo'<div class="clearfix"></div><a href="product.php?id=1"><button type=button class="btn btn-xs">View all</button></a>
		 </div>';

		 
		 
 
		  echo '<br/><h5>Wind instruments</h5>
		 <div class="items-sec btm-sec">';		 
			 
$sql = "SELECT * FROM product where catid=2 order by proid desc limit 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


   
  
    while($row = $result->fetch_assoc()) {
		
		 $c=$row['proid']; 
			 echo'<div class="col-md-3 feature-grid">'.
				 "<a href='single.php?id=$c'>".'<img src="admin/proimg/'.$row["picture"].'" style="height:260px;" />
					 <div class="arrival-info">
						  <h4>'.$row["productname"].'</h4>
						 <p>Rs '.$row["price"].'</p>
						 <span class="pric1"><del>Rs 650</del></span>
						 <span class="disc">[8% Off]</span>
					 </div>
					<div class="viw">'.
						"<a href='single.php?id=$c'>".'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>';
		 
			 
			 }

}
  else {
    echo "0 results";
}
echo'<div class="clearfix"></div><a href="product.php?id=2"><button type=button class="btn btn-xs">View all</button></a>
		 </div>';		 
	
echo '<br/><h5>Keyboards and Synthesizers</h5>
		 <div class="items-sec btm-sec">';		 
			 
	$sql = "SELECT * FROM product where catid=5 order by catid desc limit 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


   
  
    while($row = $result->fetch_assoc()) {
		
		 $c=$row['proid']; 
			 echo'<div class="col-md-3 feature-grid">'.
				 "<a href='single.php?id=$c'>".'<img src="admin/proimg/'.$row["picture"].'" style="height:260px;" />
					 <div class="arrival-info">
						  <h4>'.$row["productname"].'</h4>
						 <p>Rs '.$row["price"].'</p>
						 <span class="pric1"><del>Rs 650</del></span>
						 <span class="disc">[8% Off]</span>
					 </div>
					 <div class="viw">'.
						"<a href='single.php?id=$c'>".'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>';
		 
			 
			 }

}
  else {
    echo "0 results";
}
echo'<div class="clearfix"></div><a href="product.php?id=5"><button type=button class="btn btn-xs">View all</button></a>
		 </div>';	



echo '<br/><h5>Drums and Percussion</h5>
		 <div class="items-sec btm-sec">';		 
			 
	$sql = "SELECT * FROM product where catid=3 order by catid desc limit 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


   
  
    while($row = $result->fetch_assoc()) {
		
		 $c=$row['proid']; 
			 echo'<div class="col-md-3 feature-grid">'.
				 "<a href='single.php?id=$c'>".'<img src="admin/proimg/'.$row["picture"].'" style="height:260px;" />
					 <div class="arrival-info">
						  <h4>'.$row["productname"].'</h4>
						 <p>Rs '.$row["price"].'</p>
						 <span class="pric1"><del>Rs 650</del></span>
						 <span class="disc">[8% Off]</span>
					 </div>
					 <div class="viw">'.
						"<a href='single.php?id=$c'>".'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>';
		 
			 
			 }

}
  else {
    echo "0 results";
}
echo'<div class="clearfix"></div><a href="product.php?id=3"><button type=button class="btn btn-xs">View all</button></a>
		 </div>';	

echo '<br/><h5>Studio/Stage Equipment & Accessories</h5>
		 <div class="items-sec btm-sec">';		 
			 
	$sql = "SELECT * FROM product where catid=4 order by catid desc limit 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


   
  
    while($row = $result->fetch_assoc()) {
		
		 $c=$row['proid']; 
			 echo'<div class="col-md-3 feature-grid">'.
				 "<a href='single.php?id=$c'>".'<img src="admin/proimg/'.$row["picture"].'" style="height:260px;" />
					 <div class="arrival-info">
						  <h4>'.$row["productname"].'</h4>
						 <p>Rs '.$row["price"].'</p>
						 <span class="pric1"><del>Rs 650</del></span>
						 <span class="disc">[8% Off]</span>
					 </div>
					 <div class="viw">'.
						"<a href='single.php?id=$c'>".'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>';
		 
			 
			 }

}
  else {
    echo "0 results";
}
echo'<div class="clearfix"></div><a href="product.php?id=4"><button type=button class="btn btn-xs">View all</button></a>
		 </div>';		 
	?>		 	
			 
		 
		 
	 </div>
</div>
<!---->
<div class="offers">
	 <div class="container">
	 <h3>End of Season Sale</h3>
	 <div class="offer-grids">
		 <div class="col-md-6 grid-left">
			 <a href="single.php?id=19"><div class="offer-grid1">
				 <div class="ofr-pic">
					 <img src="admin/proimg/ofr3.jpeg" class="img-responsive" alt=""/>
				 </div>
				 <div class="ofr-pic-info">
					 <h4>Keyboards <br></h4>
					 <span>UP TO 60% OFF</span>
					 <p>Shop Now</p>
				 </div>
				 <div class="clearfix"></div>
			 </div></a>
		 </div>
		 <div class="col-md-6 grid-right">
			 <a href="single.php?id=21"><div class="offer-grid2">				 
				 <div class="ofr-pic-info2">
					 <h4>Flat Discount</h4>
					 <span>UP TO 30% OFF</span>
					 <h5>Keyboards</h5>
					 <p>Shop Now</p>
				 </div>
				 <div class="ofr-pic2">
					 <img src="admin/proimg/ofr3.jpeg" class="img-responsive" alt=""/>
				 </div>
				 <div class="clearfix"></div>
			 </div></a>
		 </div>
		 <div class="clearfix"></div>
	 </div>
	 </div>
</div>
<!---->

<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
