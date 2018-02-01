<?php
include("connection.php");

if(isset($_POST["ChangePassword"]))
{
	mysqli_query($con,"UPDATE admin SET  Password='$_POST[Password]' where LoginID='$_POST[LoginID]' and Password='$_POST[olPassword]'");
	if(mysqli_affected_rows($con) == 1)
	{
		$ressucc =  "adminstrator password changed successfully";
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
          <h2>Change Password For Adminstrator</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="body">
     <div class="left">
      <?php
	  include("sidebar.php");
	  ?>
    </div>
    <div class="big_center no_margin">
       <form action="" method="post" id="contactform" name="form2">
        <ol>
          <li>
            <label for="LoginID">Login ID<br />
            </label>
            <input id="LoginID" name="LoginID" class="text" />
          </li>
          <label for="oldPassword">old Password<br />
            </label>
            <input name="olPassword" type="password" class="password" id="olPassword" />
          <li>
            <label for="Password">Password<br />
            </label>
            <input name="Password" type="password" class="password" id="Password" />
          </li>
          <li>
            <label for="Confirm Password">Confirm Password<br />
            </label>
           <input name="CPassword" type="password" class="password" id="CPassword" />
          </li>
        <input name="ChangePassword" type="submit" value="Change Password" />
          
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