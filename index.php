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

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Music Download </title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>Find your favorite song.</h1>
            <p>We have more than a a MILLION songs for you to download. </p>
            <a href="#" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>SongForYou</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <div class="row"> 
      
    
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewsong">
		
		
		
<style>
.borderless td, .borderless th{
	border:none;
}

.shrin
{   width:50px;
	
}
</style>
  <?php

//$sql = "SELECT * FROM song1";
//$sql = "SELECT * FROM song1,art1 where song1.aid=art1.aid";
$sql = "SELECT * FROM tblsongs where Price=0 and status=1 order by Sdate desc limit 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table class='table borderless'>";
  echo "<h1>Latest songs</h1>";
   session_start();
  
    while($row = $result->fetch_assoc()) {

      $sid=$row['songid'];
         echo "<tr><td class='shrin'><a href='songinfo.php?id=$sid'><img src='admin/img/".$row['simage']."' height=30px width=30px/></a></td><td>". $row["SongTitle"]."&nbsp&nbsp"."<br/><small>".$row["artistname"]."</small>".
      


         "</td><td  align='right'><a href='music.php?id=$sid'><button type=button class='btn btn-xs'><span class='glyphicon glyphicon-play'></span> PLAY</button></a></td>";
		 
		 if($_SESSION['login']){
		 echo'<td><a href="admin/mp3/'.$row["File"].'"><button type="button" name="submit" class="btn btn-xs"><span class="glyphicon glyphicon-download-alt"></span> DOWNLOAD</button></a></td></tr>';
		 }
		 else{
									echo'<td><a href="#loginform" data-toggle="modal" data-dismiss="modal"><button type=button class="btn btn-xs"><span class="glyphicon glyphicon-download-alt"></span> DOWNLOAD</button></a></td></tr>';
			}

    }

}
 else {
    echo "0 results";
}
echo"</table>";
 $conn->close();
 ?>
       
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 






<!-- Fun Facts-->

<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i></i><span class="fb" style="font-weight:bold"></span></h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-music counter-wrapper" aria-hidden="true"></i><span class="bike" style="font-weight:bold"></span></h2>
            <p>New Songs</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-music" aria-hidden="true"></i><span class="code" style="font-weight:bold"></span></h2>
            <p>Old Songs</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i><span class="coffee" style="font-weight:bold"></span></h2>
            <p>Satisfied Users</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Our Satisfied <span>Customers</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">
<?php 
$tid=1;
$sql = "SELECT tbltestimonial.*,tblusers.* from tbltestimonial join tblusers on tbltestimonial.userid=tblusers.userid where tbltestimonial.Status=:tid";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>


        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="admin/userimg/<?php echo htmlentities($result->uimage) ?>" alt="" /> 
		  </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5><?php echo htmlentities($result->uname);?></h5>
            <p><?php echo htmlentities($result->message);?></p>
          </div>
        </div>
        </div>
        <?php }} ?>
        
       
  
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 


<!--Footer -->
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
<!--/Forgot-password-Form --> 

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



<script src="jquery-1.12.4.min.js" charset="utf-8"></script>
    <script src="animationCounter.js" charset="utf-8"></script>
    <script type="text/javascript">
    $('#counter-block').ready(function(){
        $('.fb').animationCounter({
          start: 0,
		  end: 40,
          step: 1,
          delay:110
        });
        $('.bike').animationCounter({
          start: 93100,
		  end: 100000,
          step: 3,
          delay:550
        });
        $('.code').animationCounter({
          start: 66300,
          end: 100000,
          step: 4,
          delay: 690
        });
        $('.coffee').animationCounter({
          start: 151200,
          end: 160000,
          step: 3,
          delay: 470
        });
    });
    </script>








</body>


</html>