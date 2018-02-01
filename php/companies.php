<?php
include("connection.php");
if(isset($_POST[submit]))
{


$sql="INSERT INTO companies (compid, compname, compaddr, compcont,compinfo)
VALUES('$_POST[compid]','$_POST[companyname]','$_POST[address]','$_POST[contno]','$_POST[companyinfo]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
}
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
      <h2>Add New company</h2>
      <form id="form2" name="form2" method="post" action="">
        <p>
          <label for="compid"><strong>Company ID</strong></label>
          <br />
<input name="compid" type="text" id="compid" size="65" />
        </p>
        <p>
          <label for="companyname"><strong>Company Name</strong></label>
          <br />
<input name="companyname" type="text" id="companyname" size="65" />
        </p>
        <p>
          <label for="address"><strong>Company Address</strong></label>
          <br />
<textarea name="address" id="address" cols="48" rows="5"></textarea>
        </p>
        <p>
          <label for="contno"><strong>Contact No.</strong></label>
          <br />
<input name="contno" type="text" id="contno" size="65" />
        </p>
        <p>
          <label for="companyinfo"><strong>Company information</strong><br />
          </label>
          <textarea name="companyinfo" id="companyinfo" cols="48" rows="5"></textarea>
        </p>
        <p>
          <input type="submit" name="submit" id="submit" value="Submit" />
        </p>
      </form>
      <p class="spec">&nbsp;</p>
    </div>
    <div class="clr"></div>
  </div>
</div>
<?php
include("footer.php");
?>