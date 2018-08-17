<?php
session_start();
error_reporting(0);
include('includes/cofig1.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{ 
  $qid=intval($_GET['qid']);
if(isset($_POST['submit2']))
  {
$remark=$_POST['remark'];
$admin=$_POST['admin'];

$sql = "UPDATE contactusquery SET manreply=:remark,aid=:admin WHERE  queryid=:qid";
$query = $dbh->prepare($sql);
$query -> bindParam(':remark',$remark, PDO::PARAM_STR);
$query-> bindParam(':qid',$qid, PDO::PARAM_STR);
$query-> bindParam(':admin',$admin, PDO::PARAM_STR);
$query -> execute();

$msg="Remark  successfully Updated";
}



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
      <td colspan="2" class="fontkink2" style="padding-left:0px;"><div class="fontpink2"> <b>Update Remark !</b></div></td>
      
    </tr>


   

      <tr>
      <td colspan="2" ">  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?></td>
    
    </tr>


	
	
            <tbody>
<?php 
$sql = "SELECT * from contactusquery where queryid=:qid";
$query = $dbh -> prepare($sql);
$query-> bindParam(':qid',$qid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
foreach($results as $result)
{ 

  if($result->manreply=="")
  {
?>

     <tr style=''>
      <td class="fontkink1" >Remark:</td>
      <td class="fontkink" align="justify" ><span class="fontkink">
        <textarea cols="50" rows="7" name="remark" required="required" ></textarea>
        </span></td>
    </tr>
<div class="form-group">
<div class="col-sm-8">
<select class="form-control1" name="admin">
<?php 
$sql ="SELECT id,emailid,UserName FROM admin WHERE UserName='{$_SESSION['username']}' ";//WHERE UserName=:email
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{
?>
<option readonly value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->UserName);?></option>
<?php }} ?>


	</select>			
				</div>		
					</div>
    <tr>
      <td class="fontkink1">&nbsp;</td>
      <td  >&nbsp;</td>
    </tr>

    <tr>
      <td class="fontkink">       </td>
      <td  class="fontkink"> <input type="submit" name="submit2"  value="update"   size="40" style="cursor: pointer;" /></td>
    </tr> 
    <?php } else { ?>
     <tr>
      <td class="fontkink1" ><b>Remark:</b></td>
      <td class="fontkink" align="justify" ><?php echo htmlentities($result->manreply);?></td>
    </tr>
    <tr>
      <td class="fontkink1" ><b>Remark Date:</b></td>
      <td class="fontkink" align="justify" ><?php echo htmlentities($result->replydate);?></td>
    </tr>
    <?php }}}?>
    
 

 
</table>
 </form>
</div>

</body>
</html>
<?php } ?>

     