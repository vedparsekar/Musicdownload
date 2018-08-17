<?php 
session_start();
include('includes/cofig1.php');
error_reporting(0);

?>
<?php 
session_start();
include('config.php');
error_reporting(0);

?>

<!DOCTYPE html>
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

<link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js1/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js1/simpleCart.min.js"> </script>
<script type="text/javascript" src="js1/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<link href="css2/form.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css2/flexslider.css" type="text/css" media="screen" />
</head>
<body> 
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!--header-->
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
				 $ps=0;
			 $p=0;
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

<!--header//-->
<div class="product">
	 <div class="container">	
<?php
$a= $_GET['id'];
$sql = "SELECT * FROM product where proid=$a";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


   
  
    while($row = $result->fetch_assoc()) {
		 



	 
		echo' <div class="product-price1">
			 <div class="top-sing">
				  <div class="col-md-7 single-top">	
					 <div class="flexslider">
							  <ul class="slides">
								<li data-thumb="admin/proimg/'.$row["picture"].'">
									<div class="thumb-image"> <img src="admin/proimg/'.$row["picture"].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								<li data-thumb="admin/proimg/'.$row["picture1"].'">
									 <div class="thumb-image"> <img src="admin/proimg/'.$row["picture1"].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								<li data-thumb="admin/proimg/'.$row["picture2"].'">
								   <div class="thumb-image"> <img src="admin/proimg/'.$row["picture2"].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li> 
							  </ul>
						</div>					 					 
					 <script src="js1/imagezoom.js"></script>
						<script defer src="js1/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $(".flexslider").flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>

				 </div>	
			     <div class="col-md-5 single-top-in simpleCart_shelfItem">
					  <div class="single-para ">
						 <h4>'.$row["productname"].' </h4><br/>							
							<h6 class="item_price">Rs '.$row["price"].'</h6>							
							<p class="para">'.$row["productdescription"].'</p>
							<div class="prdt-info-grid">
								 <ul>
									 <li>- Brand : </li>
									 <li>- Dimensions :</li>
									 <li>- Color : Brown</li>
									 <li>- Material : Wood</li>
								 </ul>
							</div>';
							if($_SESSION['login']){
								$c=$row['proid'];
					
				echo"<form action='addcart.php?p=$c' method='POST'><input type='number' value='1' min='1' max='10' name='quan' class='item_addd'/><br/><input type='submit' class='btn btn-xs' name='ADD' value='ADD TO CART'></form>";
							}
else{
	echo'<a href="#loginform" data-toggle="modal" data-dismiss="modal"><input type="button" class="btn btn-xs" value="ADD TO CART"></a>';
}							
					 echo'</div>
				 </div>';
				
		  }

}
  else {
    echo "0 results";
}
echo'<div class="clearfix"></div>
		 </div></div>';
	?>	 
		 
		 
		 <div class="bottom-prdt">
			 <div class="btm-grid-sec">
			 <?php
			 $sql = "SELECT * FROM product order by catid desc limit 6";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


   
  
    while($row = $result->fetch_assoc()) {
		 $c=$row['proid'];

			 
			 
			  echo'<div class="col-md-2 feature-grid">'.
					 "<a href='single.php?id=$c'>".'
						<img src="admin/proimg/'.$row["picture"].'" style="height:210px;"/>
						<h6>'.$row["productname"].'</h6>
						<span>Rs '.$row["price"].'</span></a>
				 </div>';
				  }

}
  else {
    echo "0 results";
				 
  }			 
				 
				 
				 
				 
				  echo'<div class="clearfix"></div>
			 </div>			
		 </div>';
		 
	?>	 
		 
		 
		 
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
