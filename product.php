
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
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<?php
if(isset($_POST['submit']))
  {
$pid=$_POST['p'];
echo $pid;
echo"ggghl";
//$songn=$_POST['song'];
//$email=$_SESSION['login'];
//$sql="INSERT INTO  tbltestimonial(UserEmail,Testimonial,song) VALUES(:email,:testimonoial,:songn)";
//$query = $dbh->prepare($sql);
//$query->bindParam(':testimonoial',$testimonoial,PDO::PARAM_STR);
//$query->bindParam(':email',$email,PDO::PARAM_STR);
//$query->bindParam(':songn',$songn,PDO::PARAM_STR);

//$query->execute();
//$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Testimonail submitted successfully";
}
else 
{
$error="Something went wrong. Please try again";
}
}
?>
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
<!--header//-->
<div class="product-model">	 
	 <div class="container">
		<?php	
		$a= $_GET['id'];
		$sql1 = "SELECT procatname FROM procategory where catid=$a";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {
		echo'<h4 align="center">'.$row["procatname"].'</h4>';
	}
	}
 
echo'<div class="col-md-9 product-model-sec"><div class="col-md-9 cart-items">';


if(isset($_POST["submit1"]))
{
	$p=$_POST["price"];
	$sql = "SELECT * FROM product where price<$p";
}
	else
	{
			
		 
$sql = "SELECT * FROM product where catid=$a";
	}

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row


   
  
    while($row = $result->fetch_assoc()) {
		 
		 echo'<div class="cart-header">
				<div class="close1">';
				$c=$row['proid'];
				if($_SESSION['login']){
				
				
				echo"<form action='addcart.php?p=$c' method='POST'><input type='number' value='1' min='1' max='10' name='quan' class='item_addd'/><input type='submit' class='btn btn-xs' name='ADD' value='ADD TO CART'></form>";
				}
				else{
	echo'<a href="#loginform" data-toggle="modal" data-dismiss="modal"><input type="button" class="btn btn-xs" value="ADD TO CART"></a>';
}
				echo' </div>
				<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">'."
							<a href='single.php?id=$c'>".'<img src="admin/proimg/'.$row["picture"].'" class="img-responsive" alt=""/></a>
						</div>
					   <div class="cart-item-info">'."
						    <h3><a href='single.php?id=$c'>".$row["productname"].'</a><span>Model No: RL-5511S</span></h3>
							<div>
								 <p>Price : Rs '.$row["price"].'</p>
								
								 <div class="clearfix"></div>
							</div>								
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>';
		 
		 
						
					}

}
  else {
    echo "0 results";
}
	?>				
					
					
					
			</div>		
			</div>
			<div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h5 ><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Categories</h5>
						 <div>
							 <ul class="place">								
								 <li><span class="glyphicon glyphicon-music" aria-hidden="true"></span>Musical instruments</li>
							
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="product.php?id=1"><p>String instruments</p></a>
									<a href="product.php?id=2"><p>Wind instruments</p></a>
									<a href="product.php?id=3"><p>Key and synthesizer</p></a>
									<a href="product.php?id=4"><p>Electronic instruments</p></a>
						     </div>
					      </div>						  
					
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->					 
				 </section>
				 <br/>
				
				 <section  class="sky-form">
						<h5><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>Price</h5>
						<?php echo"<form action='product.php' method='post'>"; ?>
							<select name="price">
							<option value="5000">1000-5000</option>
							<option value="10000" >5000-10000</option>
							<option value="20000">10000-20000</option>
							<option value="100000" >20000-Above</option>
							</select>
								<br/><br/>
						<input type="submit" value="APPLY" name="submit1" class="btn btn-xs"/>
							</form>
				   </section>
				   <!---->
					 <script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
					<script type='text/javascript'>//<![CDATA[ 
					$(window).load(function(){
					 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 100000,
								values: [ 500, 100000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

					});//]]> 
					</script>
					 <!---->
  
				  		   
			 </div>				 
	      </div>
		</div>


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
