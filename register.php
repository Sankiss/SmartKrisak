
<?php
$message='';
if(isset($_GET['msg']) && $_GET['msg']=='ins'){
$message="Record Inserted Successfully.";
}
else if(isset($_GET['msg']) && $_GET['msg']=='exists'){
$message="User already Exists !!.please choose another email.";
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Smart Krisak</title>
<link href="smart krisak.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>


<body>
<div id="banner"/></div>
<div id="wrapper">
<div id="menu">
<table width="200" border="0">
  <tr>
    <td width="250" height="50">Home </td>
  </tr>
  <tr>
    <td width="250" height="50">About us</td>
  </tr>
  <tr>
    <td width="250" height="50">Agriculture Informaton</td>
  </tr>
  <tr>
    <td width="250" height="50">Krisak Profile</td>
  </tr>
  <tr>
    <td width="250" height="50">Contact us</td>
  </tr>
</table>
</div>



<div id="Register">
<p align="justify"><strong>Welcome to</strong><em><strong> Smart Krisak.</strong></em></p>
<form action="Registerprocess.php" method="post" name="Registration">
  <table id="Register_table">
  <tr id="tr_reg">
    <td > <?php echo $message;?> </td>
    </tr>
    <tr id="tr_reg">
      <td width="280">First Name:
        <label>
          <input type="text" name="fname" id="fname" />
        </label></td>
      <td width="277">Middle Name:
        <label>
          <input type="text" name="mname" id="mname" />
        </label></td>
      <td width="255">Last Name:
        <label>
          <input type="text" name="lname" id="lname" />
        </label></td>
    </tr>
    <tr>
      <td height="20" width="280"><p><strong> Address</strong> :</p></td>
    </tr>
    <tr id="tr_reg">
      <td>Provience:
        <select name="provience" size="1" id="provience" title="select your provience">
            <option>--Select your Provience--</option>
            <option>Provience1</option>
            <option>Provience2</option>
            <option>Provience3</option>
            <option>Provience4</option>
            <option>Provience5</option>
            <option>Provience6</option>
            <option>Provience7</option>
        </select></td>
      <td width="277">District:
        <label>
          <input type="text" name="district" id="district" />
          </label>      </td>
      <td width="255">city/village:
        <label>
          <input type="text" name="city" id="city" />
          </label>      </td>
    </tr>
    <tr id="tr_reg">
      <td>Ward :
        <label>
          <input type="text" name="ward" id="ward" />
        </label></td>
      <td>Tole :
        <label>
          <input type="text" name="tole" id="tole" />
        </label></td>
    </tr>
    <tr>
      <td height="20" width="280"><p><strong> Contact Number:</strong> </p></td>
    </tr>
    <tr id="tr_reg">
      <td>Tel .No:        
        <input type="text" name="tel_no" id="tel_no" /></td>
      <td>Mobile No:
        <input name="mbl_no" type="text" id="mbl_no" maxlength="10" />      </td>
    </tr>
    <tr>
      <td><strong>E-Mail:</strong>
          <label>
          <input name="e-mail" type="text" id="e-mail" size="25" />
        </label></td>
      <td> Password:
        <input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td height="20" width="280"></td>
      <td><p align="left"><em>E-mail id or Mobile.No is used as Login Id </em></p></td>
    </tr>
    <tr>
      <td><strong>Engaged in Agriculture:</strong>
          <label>
          <input type="radio" name="radio" id="button" value="button" />
          yes 
          <input type="radio" name="radio" id="button2" value="button" />
          no          </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr id="tr_reg">
      <td height="20" width="280"></td>
      <td><div style="background-color:#707151">
          <p align="center">
            <input name="reset" type="reset" id="reset" value="Reset" />
            <input type="submit" name="submit" id="submit" value="Submit" />
          </p>
      </div></td>
    </tr>
  </table>
</form>


</div>


<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "phone_number", {format:"phone_custom"});
//-->
</script>
</body>
</html>

