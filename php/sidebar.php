<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   $id = $_SESSION['adminid'];
?>
<div class="box no_margin">
        
  <!-- admin sidemenu -sreekanth kasani-->
        <div class="box_t">
          <div class="box_b">
            <h2>Admin Menu</h2>
            <ul>
              <li><a href="admin-home.php">Dashboard</a></li>
              <li><a href="admin-create.php?profileedit=<?php echo $id; ?>">Admin Profile</a></li>
              <li><a href="changepassword.php">Change Password</a></li>
              <li><a href="#">Employees</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">Designing Services</a></li>
            </ul>
          </div>
        </div>
  <!-- ==================================================================================== -->

       <div class="box_t">
          <div class="box_b">
            <h2>Admin Menu</h2>
            <ul>
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Admin Profile</a></li>
              <li><a href="#">Admins</a></li>
              <li><a href="#">Employees</a></li>
              <li><a href="#"></a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">Designing Services</a></li>
            </ul>
          </div>
        </div> 
</div>