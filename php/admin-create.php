<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

include("connection.php");


// update the details of admin --sreekanthkasani


$ressucc = null;
if(isset($_POST["update"]))
{
	mysqli_query($con,"UPDATE admin SET AdminName='$_POST[adminname]',LoginID='$_POST[LoginID]', branchname='$_POST[branchname]',EmailId='$_POST[E_mailID]' where AdminID = '$_SESSION[adminid]'");

	if(mysqli_affected_rows($con) == 1)
	{
		$ressucc =  "adminstrator record updated successfully..";
	}
}

$id = $_SESSION['adminid'];

$result = mysqli_query($con,"SELECT * from admin where AdminID = '$id' ");

$rows = mysqli_fetch_array($result);
$adminid = $rows['AdminID'];
$adminname = $rows['AdminName'];
$adminlogin = $rows['LoginID'];
$adminbranch = $rows['branchname'];
$adminemail = $rows['EmailId'];
$admincrdate = $rows['CreateDate'];
$adminllogin = $rows['LastLogin'];

?> 
<?php
include("header.php");
?>


<!-- include the header -->
  <div class="slider_bg">
    <div class="slider_t">
      <div class="slider_b small">
        <div class="title_text">
          <p>&nbsp;</p>
          <h2>Administrator Profile</h2>
        </div>
      </div>
    </div>
  </div>

<!-- include sidebar -->

  <div class="body">
     <div class="left">
         <?php
	  include("sidebar.php");
	  ?>
    </div>
<!-- ============================ -->


<!-- fetch the details of the admin and insert the detail -->

    <div class="big_center no_margin">
       <form action="" method="post" id="contactform" name="form2">
        <ol>
        <li>
            <label for="name"><?php echo $ressucc; ?></label>
          </li>
        <li>
            <label for="name">Created Date :
           <?php echo $admincrdate; ?></label>
          </li>
          <li>
            <label for="name">Last Login : 
           <?php echo $adminllogin; ?><br />&nbsp;
            </label>
          </li>
          <li>
            <label for="name">Adminstrator Name</label>
            <input name="adminname"  id="name" value="<?php echo $adminname; ?>" size="45" />
          </li>
          <li><br />
          </li>
          <li>
            <label for="email">E-mail ID<br />
            </label>
            <input type="text"  value="<?php echo $adminemail; ?>"  name="E_mailID" id="E-mailID" size="45"/>
          </li>
          <li><br />
          </li>
          <li>
            <label for="LoginID">Login ID<br />
            </label>
            <input name="LoginID" id="LoginID" size="45"  type="text"  value="<?php echo $adminlogin; ?>" />
          </li>
          <li><br />
          </li>
          <li></li>
          <li>
            <label for="Branch Name">Branch Name<br />
            </label>
            <select name="branchname">
              <option value="Cochin" 


			  <?php 
			  if($adminbranch =="Cochin")
			  {
				  echo "selected";
				  }
			  ?>
			  >Cochin</option>
              <option value="Mangalore"
			  <?php 
			  if($adminbranch =="Mangalore")
			  {
				  echo "selected";
			  }
			  ?>>Mangalore</option>
              <option value="Chennai" 
			  <?php 
			  if($adminbranch =="Chennai")
			  {
				  echo "selected";
				  }
			  ?> >Chennai</option>
              <option value="Mumbai"
               <?php 
			  if($adminbranch =="Mumbai")
			  {
				  echo "selected";
				  }
			  ?>
              >Mumbai</option>
              <option value="New Delhi"
               <?php 
			  if($adminbranch =="New Delhi")
			  {
				  echo "selected";
				  }
			  ?>
              >New Delhi</option>
              <option value="Bangalore"
               <?php 
			  if($adminbranch =="Bangalore")
			  {
				  echo "selected";
				  }
			  ?>
              >Bangalore</option>
              <option value="Hyderabad"
              <?php 
			  if($adminbranch =="Hyderabad")
			  {
				  echo "selected";
				  }
			  ?>
              >Hyderabad</option>
              <option value="Goa" 
              <?php 
			  if($adminbranch =="Goa")
			  {
				  echo "selected";
				  }
			  ?>>Goa</option>
              <option value="Pune" <?php 
			  if($adminbranch =="Pune")
			  {
				  echo "selected";
				  }
			  ?>>Pune</option>
              <option value="Tirupur" <?php 
			  if($adminbranch =="Tirupur")
			  {
				  echo "selected";
				  }
			  ?>>Tirupur</option>
            </select>
          </li>
          <p>&nbsp;          </p>
          <p>
            <input name="update" type="submit" id="update" value="Update Administrator record" />
          </p>
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