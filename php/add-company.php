<?php
include("connection.php");
if(isset($_POST["update_company"]))
{
	mysql_query("UPDATE companies SET compname='$_POST[Companyname]', compname='$_POST[Companyname]', compaddr='$_POST[Companyadd]',compcont='$_POST[Companyno]', compinfo='$_POST[Companyinfo]' where compid='$_POST[Companyid]'");
	if(mysql_affected_rows() == 1)
	{
		$ressucc =  "Company record updated successfully..";
	}
}
if(isset($_POST["Add_company"]))
{
$sql="INSERT INTO companies (compid, compname, compaddr, compcont,compinfo)
VALUES('$_POST[Companyid]','$_POST[Companyname]','$_POST[Companyadd]','$_POST[Companyno]','$_POST[Companyinfo]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$ressucc =  "1 record added";
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
      <div class="body">
    <div class="big_center no_margin">
      <h2>Add New company</h2>
      <p><?php echo $ressucc; ?></p>
      <form id="form2" name="form2" method="post" action="">
        <p>
          <label for="compid"><strong>Company ID</strong></label>
          <br />
          <input name="Companyid" type="text" /> <br />
          <label for="companyname"><strong>Company Name</strong></label>
          <br />
          <input name="Companyname" type="text" /> <br />
          
        </p>
        <p>
          <label for="address"><strong>Company Address</strong></label>
          <br />
          <textarea name="Companyadd" cols="30" rows="5"></textarea>
        </p>
        
        <p>
          <label for="contno"><strong>Contact No.</strong></label>
          <br />
          <input name="Companyno" type="text" /> <br />
        </p>
        <p>
          <label for="companyinfo"><strong>Company information</strong><br />
          </label>
        </p>
         <p>
        <textarea name="Companyinfo" cols="30" rows="5"></textarea>         </p>
        <p>
         <input name="Add_company" type="submit" value="Add company" />
         <input name="update_company" type="submit" id="update_company" value="Update" />
        </p>
      </form>
      <p class="spec">&nbsp;</p>
    </div>
    <div class="clr"></div>
  </div>
</div>