<?php
include("connection.php");
if(isset($_POST["update"]))
{
	$dt = date("Y-m-d");
	mysql_query("UPDATE warehouse SET empid='$_POST[empid]', date='$dt','warehouseno='$_POST[warehouseno]' where ShippingID='$_POST[shippingid]'");
	if(mysql_affected_rows() == 1)
	{ 
		$ressucc =  "Company record updated successfully..";
	}
}
if(isset($_POST["Add Warehouse"]))
{
$sql="INSERT INTO warehouse (warehouseno,empid,Date,shippingID)
VALUES('$_POST[warehouseno]','$_POST[empid]','$dt','$_POST[shippingid]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$ressucc =  "1 record added";
}
$resultshipping = mysql_query("select * from shipping");

include("header.php");
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
       <form action="warehouse.php" method="post" id="contactform">
        <ol>
          <li>
            <label for="warehouse No">warehouse No</label>
            <input name="warehouseNo" class="text" id="warehouseNo" />
          </li>
          <li>
            <label for="date">Date<br />
            </label>
            <input id="date" name="date" class="text" />
          </li>
          <li>
            <label for="EmpId ">EmpId </label><input id="EmpId" name="EmpId" class="text" />
          </li>
          <li>
            <label for="Shippingid">Shipping id<br />
            </label>
                        <select name="Shippingid" id="shippingid">
            <?php
			while($arrship = mysql_fetch_array($resultshipping))
			{
			echo "<option value='$arrship[shippingid]'>$arrship[shippingid]</option>";
			}
			?>
            </select>
          </li>
          <li>
            <input name="submit" type="submit" value="Add warehouse" />
          <input name="update" type="submit" value="update warehouse" />
        </li>
        </ol>
      </form>
      <p class="spec">&nbsp;</p>
    </div>
    <div class="clr"></div>
  </div>
</div>
<?php
include("footer.php");
?>