<?php
include("connection.php");
if(isset($_POST["update_ship"]))
{
	mysql_query("UPDATE shipping SET Itemno='$_POST[ItemNo]', Cargotype='$_POST[Cargotype]', ShippingDate='$_POST[ShippingDate]',BerthDate='$_POST[BerthDate]', StartLoc='$_POST[StartLoc]',DestLoc='$_POST[DestLoc]',NetTon='$_POST[NetTon]',GrossTon='$_POST[GrossTon]' where shipno='$_POST[ShipNo]'");
	if(mysql_affected_rows() == 1)
	{
		$ressucc =  "Company record updated successfully..";
	}
}

if(isset($_POST["Add_ship"]))
{
$sql="INSERT INTO shipping (shipno, Itemno, Cargotype,ShippingDate,BerthDate,StartLoc,DestLoc,NetTon,GrossTon)
VALUES('$_POST[ShipNo]','$_POST[ItemNo]','$_POST[Cargotype]','$_POST[ShippingDate]','$_POST[BerthDate]','$_POST[StartLoc]','$_POST[DestLoc]','$_POST[NetTon]','$_POST[GrossTon]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}
mysql_close($con);

?>	

<?php
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
       <form action="shipping.php" method="post" id="contactform">
        <ol>
          <li>
            <label for="ShipNo">Ship No</label>
            <select name="ShipNo" id="ShipNo">
            </select>
          </li>
          <li>
            <label for="ItemNo">ItemNo<br />
            </label>
             <select name="ItemNo" id="ItemNo">
            </select>
            <label for="Cargotype">Cargo Type<br />
            </label>
            <select name="Cargotype" id="Cargotype">
            </select>
          </li>
          <li>
            <label for="ShippingDate">Shipping Date<br />
            </label>
             <input id="ShippingDate" name="ShippingDate" class="text" />
             
            <label for="BerthDate">Berth Date<br />
            </label>            
            <input id="BerthDate" name="BerthDate" class="text" />
            <label for="StartLoc">Starting Loaction<br />
            </label>
             <select name="StartLoc" id="StartLoc">
            </select>
            <label for="DestLoc">Destination Location <br />
            </label>
            <select name="DestLoc" id="DestLoc">
            </select>
          </li>
          <li>
            <label for="NetTon">Net Ton<br />
            </label>
            <input id="NetTon" name="NetTon" class="text" />
          </li>
         <li>
            <label for="GrossTon">Gross Ton<br />
            </label>
            <input id="GrossTon" name="GrossTon" class="text" />
          </li>
          <input name="Add_ship" type="submit" value="Add ship"/>
          <input name="update_ship" type="submit" value="update ship"/>
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