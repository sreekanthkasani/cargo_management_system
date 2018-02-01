<?php
include("connection.php");
$result = mysql_query("select * from admin");

include("header.php");
?>
<div class="title_text">
          <p>Your slogan goes here</p>
          <h2>Services </h2>
        </div>
<div class="box no_margin">
        <div class="box_t">
          <div class="box_b">
            <h2>Sub Navigation</h2>
            <ul>
              <li><a href="#" class="active">Overview</a></li>
              <li><a href="#">What we offer</a></li>
              <li><a href="#">Products List</a></li>
              <li><a href="#">Project Management</a></li>
              <li><a href="#">Affiliation</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">Designing Services</a></li>
            </ul>
          </div>
        </div>
      </div>
<table width="914" border="1">
  <tr>
    <td width="199">Admin Name</td>
    <td width="184">Login ID</td>
    <td width="96">Branch Name</td>
    <td width="155">EmailId</td>
    <td width="101">Created Date</td>
    <td width="139">Last Login</td>
  </tr>
  <?php
while($arrval= mysql_fetch_array($result))
  {
 echo " <tr>
    <td>$arrval[1]</td>
    <td>$arrval[2]</td>
    <td>$arrval[4]</td>
    <td>$arrval[5]</td>
    <td>$arrval[6]</td>
    <td>$arrval[7]</td>
  </tr>";
  }
  ?>
</table>
<?php
include("footer.php");
?>
