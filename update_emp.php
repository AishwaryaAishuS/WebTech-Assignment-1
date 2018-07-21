<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	     <td ><?php include 'header.php'; ?>  </td>
	  </tr>
	  <tr height="300">
	     <td width = "220" >
	     <?php include 'nav.php'; ?>
	     </td>
	     <td width="100%" height="100%"  align="left" valign="top">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db_name="admin_db"; 
$tbl_name="employee"; 
mysql_connect("$dbhost", "$dbuser", "$dbpass")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

	$EmpID = $_POST['EmpID'];
//echo "emp is:",$EmpID;
	$v1=$_POST['name'];
	$v2=$_POST['age'];
	$v3=$_POST['location'];
                  $v4=$_POST['salary'];
	$sql = "UPDATE employee SET name = " ."'".$v1."'".", Age = $v2, location= " ."'".$v3."'".", salary=$v4 WHERE EmpID = $EmpID";
//echo $sql;
$res = mysql_query($sql);
if($res) {
		echo "A record has been updated.";
	} else {
		printf ("Could not update record: %s\n", mysql_error());
	}
?>
 </td>    
	   </tr>
	       </table>	  
	</body>
</html>
