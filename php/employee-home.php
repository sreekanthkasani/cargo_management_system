<?php
if(isset($_POST['submit']))
{
$con = mysqli_connect("localhost","root","root","CMS");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

$sql="INSERT INTO companies (compid, compname, compaddr, compcont,compinfo)
VALUES('$_POST[compid]','$_POST[companyname]','$_POST[address]','$_POST[contno]','$_POST[companyinfo]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "1 record added";

mysqli_close($con);
}
?> 

<?php
include("header.php");
?>
  <div class="slider_bg">
    <div class="slider_t">
      <div class="slider_b small">
        <div class="title_text">Employee Home
          <h2>&nbsp;</h2>
        </div>
      </div>
    </div>
  </div>
  
  <div class="body">
    <div class="big_center no_margin">
      <h2>Employee Home</h2>
      <form id="form2" name="form2" method="post" action="">
        <p>
          <label for="companyinfo"><br />
          </label>
        </p>
    </form>
      <p class="spec">&nbsp;</p>
    </div>
    <div class="clr"></div>
  </div>
</div>