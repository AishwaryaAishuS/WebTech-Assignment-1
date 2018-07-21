<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	     <td><?php include 'header.php'; ?> </td>
	  </tr>
	  <tr height="300">
	     <td width = "220" nowrap valign="top">
	     <?php include 'nav.php'; ?>
	     </td>
	     <td  width = "300">
	     <?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="admin_db"; 
$tbl_name="login"; 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$star=$_POST['star']; 
$star = stripslashes($star);
$star = mysql_real_escape_string($star);
$sql="SELECT * FROM $tbl_name WHERE star=$star";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
$sqli="SELECT password FROM $tbl_name  WHERE star =$star";
 	$result2=mysql_query($sqli);
 	while($row = mysql_fetch_array($result2))
 	
 	echo  $row['password'] ;
}
else {
echo "Not Able to retrieve your password";
}
?>
                 </td>    
	   </tr> 
              </table>		  
	</body>
           </html>
