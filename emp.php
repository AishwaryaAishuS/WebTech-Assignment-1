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
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="admin_db"; 
$tbl_name="employee"; 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$name=$_POST["name"];
$age=$_POST["age"];
$location =$_POST["location"];
$salary=$_POST["salary"];
// To protect MySQL injection (more detail about MySQL injection)
$name = stripslashes($name);
$age = stripslashes($age);
$location = stripslashes($location);
$salary = stripslashes($salary);
$name = mysql_real_escape_string($name);
$age = mysql_real_escape_string($age);
$location = mysql_real_escape_string($location);
$salary = mysql_real_escape_string($salary);

$sql="INSERT INTO employee(name,Age,location,salary)   VALUES ('$name', '$age' ,'$location','$salary')";
$result=mysql_query($sql);
?>      
        <div >
        <font size ="5"><?php echo "Saved Successfully....";?></font><br>
        </div>
        </td>    
	   </tr>
	       </table>	  
	</body>
</html>
