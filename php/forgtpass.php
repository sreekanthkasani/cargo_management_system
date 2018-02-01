<?php
include("connection.php");
if(isset($_POST["update"]))
{
	mysql_query("UPDATE employee SET  pass='$_POST[Password]' where loginid='$_POST[loginid]'");
	if(mysql_affected_rows() == 1)
	{
		$ressucc =  "Employee Password updated successfully..";
	}
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
      <div class="body">
    <div class="big_center no_margin">
      <h2>Forgot Password</h2>
      <p>
	  <?php echo $ressucc; ?></p>
      <form id="form2" name="form2" method="post" action="">
        <p>
          <label for="Loginid"><strong>Login ID</strong></label>
          <br />
          <input name="loginid" type="text" /> <br />
          <label for="Password"><strong>Password</strong></label>
          <br />
          <input name="Password" type="Password" /> <br />
        <label for="cPassword"><strong>Confirm Password</strong></label>
          <br />
          <input name="Password" type="Password" /> <br />
        </p>
        <input name="update" type="submit" value="update" />
        </form>
      <p class="spec">&nbsp;</p>
    </div>
    <div class="clr"></div>
  </div>
</div>