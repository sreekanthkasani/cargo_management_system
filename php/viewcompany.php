<?php
include("header.php");
include("connection.php");
$sql=mysql_query("select * from companies");
?>
  <div class="slider_bg">
    <div class="slider_t">
      <div class="slider_b small">
        <div class="title_text">
          <p>Your slogan goes here</p>
          <h2>Services </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="body">
     <div class="left">
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
    </div>
    <div class="big_center no_margin">
          ADD Company   
<table width="600" border="1">
  <tr>
    <td width="123">Comapany Name</td>
    <td width="88">Address</td>
    <td width="77">Contact No</td>
   <td width="122">Company detils</td>
    </tr>
  <tr>
  <?php
  while($arr=mysql_fetch_array($sql))
  {
	  
 echo " <tr>";
 
     echo   " <td >$arr[1]</td>";
      echo   "<td>$arr[2]</td>";
     echo   " <td >$arr[3]</td>";
    echo   "  <td>$arr[4]</td>";
	 
    echo   "  </tr>";
  }
  ?>
</table>
       
       
      <p class="spec">&nbsp;</p>
    </div>
    <div class="clr"></div>
  </div>
</div>
<?php
include("footer.php");
?>