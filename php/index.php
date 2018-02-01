<?php
session_start();
include("header.php");
include("connection.php");


//-------------------------------------------------------------------------------------------
//employee login handler if the employee exists with the given username and password 
//then add the details to the session 
//-sreekanthkasani

if(isset($_POST["emplogin"]))
{
$resultq = mysqli_query($con,"SELECT * FROM employee where loginid='$_POST[emploginid]' AND pass='$_POST[emppassword]'");
	$rowarray=mysqli_fetch_array($resultq);
	if(mysqli_num_rows($resultq) == 1)
	{
		$_SESSION["empid"]	 = $rowarray["empid"];
		$_SESSION["loginid"] 	= $rowarray["loginid"];
		$_SESSION["branchname"]	 = $rowarray["createdat"];
		$_SESSION["section"] = $rowarray["section"];
		$_SESSION["llogin"] = $rowarray["llogin"];	
			 
		header("Location: employee-home.php");
	}
}


//---------------------------------------------------------------------------------------------
//admin login  handler if the admin exists with given username and password 
//then add the username and password to the session 
// --sreekanthkasani

if(isset($_POST["adminlogin"]))
{
$resultq = mysqli_query($con,"SELECT * FROM admin where LoginID='$_POST[adminloginid]' AND Password='$_POST[adminpassword]'");
  $rowarray=mysqli_fetch_array($resultq);
	if(mysqli_num_rows($resultq) == 1)
	{
		$_SESSION["adminid"] = $rowarray['AdminID'];
		$_SESSION["loginid"] = $rowarray['LoginID'];
		$_SESSION["branchname"] = $rowarray['branchname'];
		$_SESSION["CreateDate"] = $rowarray['CreateDate'];
		$_SESSION["LastLogin"] = $rowarray['LastLogin'];
									 
		header("Location: admin-home.php");
	}
}
?>


<!-- starting of the slider -->

  <div class="slider_bg">
    <div class="slider_t">
      <div class="slider_b">
        <div id="slider">
          <ul>
            <li>
              <p class="img"><a href="#"><img src="images/screen_1.jpg" alt="screen 1" width="405" height="226" /></a></p>
              <div class="button"><a href="#"><img src="images/but_launch_project.gif" alt="picture" width="139" height="28" border="0" /></a><span class="right_but"><img src="images/l_arrow.gif" alt="picture" width="84" height="28" border="0" /><img src="images/r_arrow.gif" alt="picture" width="84" height="28" border="0" /></span></div>
              <h2>Designlab</h2>
              <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </li>
            <li>
              <p class="img"><img src="images/screen_2.jpg" alt="screen 2" width="405" height="226" /></p>
              <div class="button"><a href="#"><img src="images/but_launch_project.gif" alt="picture" width="139" height="28" border="0" /></a><span class="right_but"><a href="#"><img src="images/l_arrow.gif" alt="picture" width="84" height="28" border="0" /></a><a href="#"><img src="images/r_arrow.gif" alt="picture" width="84" height="28" border="0" /></a></span></div>
              <h2>Universal Business</h2>
              <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </li>
            <li>
              <p class="img"><img src="images/screen_3.jpg" alt="screen 3" width="405" height="226" /></p>
              <div class="button"><a href="#"><img src="images/but_launch_project.gif" alt="picture" width="139" height="28" border="0" /></a><span class="right_but"><a href="#"><img src="images/l_arrow.gif" alt="picture" width="84" height="28" border="0" /></a><a href="#"><img src="images/r_arrow.gif" alt="picture" width="84" height="28" border="0" /></a></span></div>
              <h2>Business Style</h2>
              <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<!-- ending of the slider -sreekanthkasani -->


<!-- ===================================================================================== -->


<!-- posting the details to the login handler present above - sreekanthkasani -->

  <form method="post" action="" name="cargomgt">
  <div class="box_block">

    <!-- employee login  -->
    <div class="box">
      <div class="box_t">
        <div class="box_b">
          <h2>Employees Login</h2>
          <p>Login ID</p>
          <p>
            <label>
              <input name="emploginid" type="text" class="text" id="emploginid" size="35" />
            </label>
          </p>
          <p>Password</p>
          <p>
            <label>
              <input name="emppassword" type="password" class="text" id="emppassword" size="35" />
            </label>
</p>
          <p>
            <input type="submit" name="emplogin" id="emplogin" value="Employee Login" />
          </p>
        </div>
      </div>
    </div>

    <!-- ============================================================================  -->
    
    <!-- administrator login -->

    <div class="box">
      <div class="box_t">
        <div class="box_b">
          <h2>Administrator Login</h2>
          <p>Login ID</p>
          <p>
            <label>
              <input name="adminloginid" type="text" class="text" id="adminloginid" size="35" />
            </label>
          </p>
          <p>Password</p>
          <p>
            <label>
              <input name="adminpassword" type="password" class="text" id="adminpassword" size="35" />
            </label>
</p>
          <p>
            <input type="submit" name="adminlogin" id="adminlogin" value="Admin Login" />
          </p>
        </div>
      </div>
    </div>

    <!-- ================================================================================== -->
    </form>

    <!-- unhandled form action -sreekanthkasani-->
    <div class="box no_margin">
      <div class="box_t">
        <div class="box_b">
          <h2>	Forgot Password</h2>
          <p>Enter Login ID</p>
          <p>
            <label>
              <input name="first_name4" type="text" class="text" id="first_name4" size="35" />
            </label>
          </p>
          <p>Enter Email ID</p>
          <p>
            <label>
              <input name="first_name" type="text" class="text" id="first_name" size="35" />
            </label>
          </p>
          <p>
            <input type="submit" name="emplogin3" id="emplogin3" value="Change Password" />
          </p>
        </div>
      </div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="body">
    <div class="clr"></div>
  </div>
</div>

<!-- ========================================================================================== -->

<?php
include("footer.php");
?>