<?php
include("connection.php");
if(isset($_POST["updatebtn"]))
{
	mysql_query("UPDATE employee SET  loginid='$_POST[login]', pass='$_POST[pass]', fname='$_POST[firstname]',lname='$_POST[lastname]', emailid='$_POST[email]', contactno='$_POST[contno]' , section='$_POST[section]'  where empid='$_POST[empid]'");
	if(mysql_affected_rows() == 1)
	{
		$ressucc =  "Employee record updated successfully..";
	}
}
if(isset($_POST["AddEmployee"]))
{
$sql="INSERT INTO employee (empid, loginid, pass, fname,lname,emailid,contactno,section)
VALUES('$_POST[empid]','$_POST[login]','$_POST[pass]','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contno]','$_POST[section]')";

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
      <h2>Add New Employee</h2>
      <p><?php echo $ressucc; ?></p>
      <form id="form2" name="form2" method="post" action="">
        <p>
          <label for="empid"><strong>Employee ID</strong></label>
          <br />
<input name="empid" type="text" id="empid" size="65" />
        </p>
        <p><strong>Login ID</strong><br />
<input name="login" type="text" id="loginid" size="65" />
        </p>
        <p><strong>Passsword</strong><br />
<input name="pass" type="password" id="pass" size="65" />
          <br />
        </p>
        <p>
          <label for="contno"><strong>Confirm password.</strong></label>
          <br />
<input name="contno" type="password" id="contno" size="65" />
        </p>
        <p>
  <label for="firstname"></label>
          <label for="firstname"><strong>First Name</strong></label>
          <strong><br />
          </strong>
          <input name="firstname" type="text" id="firstname" size="65" />
        </p>
        <p>
          <label for="lastname"><strong>Last Name</strong><br />
          </label>
          <input name="lastname" type="text" id="lastname" size="65" />
        </p>
        <p>
          <strong>
          <label for="email">E mail ID</label>
          </strong>
          <label for="email"><br />
          </label>
          <input name="email" type="text" id="email" size="65" />
        </p>
        <p>
          <label for="contno2"><strong>Contact No</strong></label>
          <br />
<input name="contno2" type="text" id="contno2" size="65" />
        </p>
        <p>
          <strong>
          <label for="section">Section</label>
          </strong>
          <label for="section"><br />
          </label>
          <select name="section" id="section">
            <option value="eg 2">eg 2</option>
            <option value="eg 3">eg 3</option>
            <option value="eg 4">eg 4</option>
          </select>
        </p>
        <p>
          <label for="section"></label>
          <input type="submit" name="AddEmployee" id="submit" value="Add Employee" />
          <input type="submit" name="updatebtn" id="update" value="Update Employee" />
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