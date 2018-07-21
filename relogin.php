<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<table width="100%" height="100%" >
	  <tr height="10" >
	     <td>    <?php include 'header.php'; ?>    </td>
			  </tr>
	  <tr height="50">
	     <td width="100%" height="5"  align="center" valign="top">
<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="admin_db"; 
$tbl_name="login"; 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$username=$_POST['username']; 
$password=$_POST['password']; 
$newpassword=$_POST['newpassword'];
$reenter=$_POST['reenter'];
$username = stripslashes($username);
$password = stripslashes($password);
$newpassword = stripslashes($newpassword);
$ reenter = stripslashes($reenter);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$newpassword = mysql_real_escape_string($newpassword);
$ reenter = mysql_real_escape_string($reenter);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
if(newpassword == $reenter){
 	$sql2="UPDATE  $tbl_name SET password = $newpassword WHERE username = $username ";
 	$result2=mysql_query($sql2);
 		echo "Password changed successfully";
 }
 else
echo "Enter Correct password";
?>
        </td>    
	   </tr>
	   <tr>
	     <td ><?php include 'index.php'; ?>    </td>
		   </tr> 
    </table>		    
</body>
</html>
