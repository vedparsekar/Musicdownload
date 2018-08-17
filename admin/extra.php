<?php
session_start();
error_reporting(0);
include('includes/cofig1.php');
?>
<?php 
session_start();
include('config.php');
error_reporting(0);

?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Compliant</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>

<div style="margin-left:50px;">
 <form name="updateticket" id="updateticket" method="post"> 
  <?php

//$sql = "SELECT * FROM song1";
//$sql = "SELECT * FROM song1,art1 where song1.aid=art1.aid";
$sql = "SELECT * FROM tblsongs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table class='table borderless'>";
  echo "<h1>Top songs</h1>";
   session_start();
  
    while($row = $result->fetch_assoc()) {

      $sid=$row['songid'];
         echo "<tr><td class='shrin'><a href='songinfo.php?songid=$sid'><img src='img/".$row['simage']."' height=30px width=30px/></a></td><td>". $row["SongTitle"]."&nbsp&nbsp"."<br/><small>".$row["artist"]."</small>".
      


         "</td><td  align='right'><a href='music.php?id=$sid'><button type=button class='btn btn-xs'><span class='glyphicon glyphicon-play'></span> PLAY</button></a></td>".'<td><a href="mp3/'.$row["File"].'"><button type=button class="btn btn-xs"><span class="glyphicon glyphicon-download-alt"></span> DOWNLOAD</button></a></td></tr>';
 

    }

}
 else {
    echo "0 results";
}
echo"</table>";
 $conn->close();
 ?>
 </form>
</div>

</body>
</html>


     