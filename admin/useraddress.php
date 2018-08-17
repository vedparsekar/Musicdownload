<?php
session_start();
error_reporting(0);
include('includes/cofig1.php');
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
<table width="100%" border="0" cellspacing="0" cellpadding="0">

    <tr height="50">
      <td colspan="2" class="fontkink2" style="padding-left:0px;"><div class="fontpink2"> <b>User Address: </b></div></td>
      
    </tr>


   

      <tr>
      <td colspan="2" ">  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?></td>
    
    </tr>


	
	
            <tbody>
<?php
$uaid=intval($_GET['uaid']);
$sql = "SELECT * from tblusers where userid=:uaid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uaid',$uaid, PDO::PARAM_STR);

$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>
        <tr class="product-listing-m gray-bg">
          
            <td class="fontkink1"><?php echo htmlentities($result->uaddress);?></td>
            <!--should go to data title-->
          
        </tr>
      <?php }} ?>
         </tbody>

 
</table>
 </form>
</div>

</body>
</html>


     