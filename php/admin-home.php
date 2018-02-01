<?php
include("connection.php");

//update details of the admin -sreekanthkasani

if(isset($_POST["update"]))
{
	mysqli_query($con,"UPDATE admin SET LoginID='$_POST[LoginID]', Password='$_POST[Password]', branchname='$_POST[BranchName]',EmailId='$_POST[E_mailID]' where AdminName='$_POST[adminname]'");
	if(mysqli_affected_rows($con) == 1)
	{
		$ressucc =  "adminstrator record updated successfully..";
	}
}

// add admin to the cargo management system -sreekanthkasani

if(isset($_POST['Add_Admin']))
{
$sql="INSERT INTO admin (AdminName,LoginID,Password, branchname,EmailId)
VALUES('$_POST[adminname]','$_POST[LoginID]','$_POST[Password]','$_POST[BranchName]','$_POST[E_mailID]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "1 record added";
}
mysqli_close($con);

?> 
<?php
include("header.php");
?>

<!-- giving header to the page -sreekanthkasani -->
  <div class="slider_bg">
    <div class="slider_t">
      <div class="slider_b small">
        <div class="title_text">
          <p>&nbsp;</p>
          <h2>Admin Dashboard	</h2>
        </div>
      </div>
    </div>
  </div>


  <!-- include sidebar for admin page -sreekanthkasani -->
  <div class="body">
     <div class="left">
      <?php
	  include("sidebar.php");
	  ?>
    </div>
    <div class="big_center no_mar	gin">
      <p class="spec">&nbsp;</p>
    </div>
    <div class="clr"></div>
  </div>
</div>


<?php
include("footer.php");
?>