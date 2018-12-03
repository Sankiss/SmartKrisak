<?php
ob_start();
require_once 'connection.php';
mysql_select_db("db_smartkrisak") or die("Could not select db.".mysql_error());
if(isset($_POST['submit']) && !empty($_POST['submit']))
{

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$provience=$_POST['provience'];
$district=$_POST['district'];
$city=$_POST['city'];
$ward=$_POST['ward'];
$tole=$_POST['tole'];
$tel_no=$_POST['tel_no'];
$mbl_no=$_POST['mbl_no'];
$email=$_POST['e-mail'];
$password=$_POST['password'];
/*$sql="select * from tbl_register where <p></p> fname='$fname'" ;
 echo $sql;   
	$res=mysql_query($sql) or die (mysql_error());
	$numRows=mysql_num_rows($res);
	if($numRows>0)
	{
	  header( "Location:register.php?msg=exists");
	  exit;
	  }
	  else
	  {*/
 $sql="INSERT INTO tbl_register(fname,mname,lname,provience,district,city,ward,tole,tel_no,mbl_no,e-mail,password)values
('$fname','$mname','$lname','$provience','$district','$city','$ward','$tole','$tel_no','$mbl_no','$email','$password')";
$sqlqry=mysql_query($sql);
if(!$sqlqry){
die("Could not insert Record into table.".mysql_error());
}
else {
echo "Records inserted successfully.";
header("location:register.php?msg=ins");
exit(0);
}	
}?>
 