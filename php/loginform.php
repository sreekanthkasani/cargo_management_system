<?php
include("connection.php");
if(isset($_POST["Add_company"]))
{
$sql="INSERT INTO admin (AdminName, LoginID, Password, EmailId)
VALUES('$_POST[adminname]','$_POST[loginid]','$_POST[password]','$_POST[emailid]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}
mysql_close($con);

?> 


<form name="form1" method="post" action="">

<table width="394" border="1">
  <tr>
    <td width="154"><label for="adminname">Admin name</label></td>
    <td width="224"><input type="text" name="adminname" id="adminname"></td>
  </tr>
  <tr>
    <td>Admin ID</td>
    <td><input type="text" name="adminid" id="adminid"></td>
  </tr>
  <tr>
    <td>Login ID</td>
    <td><input type="text" name="loginid" id="loginid"></td>
  </tr>
  <tr>
    <td><label for="password">Password</label></td>
    <td><input type="password" name="password" id="password"></td>
  </tr>
  <tr>
    <td><label for="emailid">Email ID</label></td>
    <td><input type="text" name="emailid" id="emailid"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="button" id="button" value="Submit"></td>
    </tr>
</table>

</form>
