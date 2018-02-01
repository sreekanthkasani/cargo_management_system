<?php
$con = mysqli_connect("localhost","root","root","CMS");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//mysql_select_db("cargo management", $con);
?>