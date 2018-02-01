<?php
include("connection.php");
if(isset($_POST["Add_Cargo"]))
{
$sql="INSERT INTO cargos (CargoID, shippingid,BerthDate,NetTon,GrossTon,shortage,Date)
VALUES('$_POST[ShipNo]','$_POST[ArrivalDate]','$_POST[BerthDate]','$_POST[NetTon]','$_POST[GrossTon]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}

$resultship = mysql_query("select * from shipping");
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
            <?php
			while($arrship = mysql_fetch_array($resultship))
			{
				echo "<option value='$arrship[shippingid]'>$arrship[shipno]</option>";
			}
			?>
            </select>
          </li>
           <li>
          <label for="ArrivalDate">Arrival Date<br />
            </label>
             <input id="ArrivalDate" name="Arrival Date" class="text" />
             
            <label for="BerthDate">Berth Date<br />
            </label>            
            <input id="BerthDate" name="Berth Date" class="text" />
            </li>
            <li>
            
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
          <li>
             <label for="Cargotype">Cargo Type<br />
            </label>
            <select name="Cargotype" id="Cargotype">
            </select>
          </li>
           <li>
            <label for="loc">Location<br />
            </label>
            <input id="loc" name="loc" class="text" />
          </li>
         <li>
            <label for="BillID">Bill ID<br />
            </label>
            <input id="BillID" name="BillID" class="text" />
           </li>
            <input name="Add_Cargo" type="submit" />
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