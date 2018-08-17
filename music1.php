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
<html lang="en"  style="
 
  margin: auto;">

<head>
  <meta charset="UTF-8">
  <title>Audio Player</title>
  
  
  <!<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

      <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/style1.css">

  
</head>

<body style="background: #0d47a1;">
<br/>
<div id='music-bars'>
<span></span>
<span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
<span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>




  <script src='js/jquery.min.js'></script>

  

    <script  src="js/index1.js"></script>

<?php
  
 session_start();
   $sid= $_GET['sid'];
$sql = "SELECT * FROM tblsongs where songid=$sid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   
  
    while($row = $result->fetch_assoc()) {

echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><div class="audio-player">
    <div id="play-btn"></div>
    <div class="audio-wrapper" id="player-container" href="javascript:;">
      <audio id="player" ontimeupdate="initProgressBar()">
			  <source src="admin/mp3/'.$row['File'].'" type="audio/mp3">
			</audio>
    </div>
    <div class="player-controls scrubber">
      <p>'.$row['SongTitle'].'-
	  <small>'.$row['artist'].'</small></p>
      <span id="seekObjContainer">
			  <progress id="seekObj" value="0" max="1"></progress>
			</span>
      <br>
      <small style="float: left; position: relative; left: 15px;" class="start-time"></small>
      <small style="float: right; position: relative; right: 20px;" class="end-time"></small>

    </div>';
    echo "<div class='album-image' style='background-image: url(admin/img/".$row['simage'].")'></div>
  </div>";
  }
  }
   else {
    echo "0 results";
}
 $conn->close();
?>
  <!<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'>
  <script src="assets/js/jquery.min.js">
  </script>

  

    <script  src="js/index.js"></script>




</body>

</html>
