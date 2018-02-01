<?php
include ("header.php");
?>
  <div class="slider_bg">
    <div class="slider_t">
      <div class="slider_b small">
        <div class="title_text">
          <p>Your slogan goes here</p>
          <h2>Contact </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="body">
    <div class="left">
      <div class="box no_margin">
        <div class="box_t">
          <div class="box_b">
            <h2>Contact Info</h2>
            <p class="spec">Feel free to contact me or please fill up below in the following details and I will be in touch shortly.</p>
            <p><strong>Address:</strong>warangal<br />
              <strong>Telephone:</strong> +91 8178459213<br />
              <strong>FAX:</strong> +458-4578<br />
              <strong>Others:</strong> +301 - 0125 - 01258<br />
              <strong>E-mail:</strong> <a href="mailto:mail@yoursitename.com">mayur@cms.com</a></p>
          </div>
        </div>
      </div>
      <div class="clr"></div>
      <div class="twitter">
        <p><strong>Follow us on Twitter</strong></p>
        <p>Vestibulum posu eros vitae nunc <a href="#">twitter.com/yourusername</a></p>
      </div>
    </div>

    <div class="big_center no_margin">
      <h2>Contact Us</h2>
      <p class="spec">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget bibendum tellus. Nunc vel imperdiet tellus. Mauris ornare aliquam urna, accumsan bibendum eros auctor ac.</p>
      <p>Suspendisse adipiscing rhoncus massa, sit amet sollicitudin quam vulputate non. In non turpis nisl. Curabitur purus mi, pharetra vitae viverra et, mattis sit amet nunc. <br />
      Quisque enim ipsum, convallis sit amet molestie in, placerat vel urna. Praesent congue auctor elit, nec pretium ipsum volutpat vitae. Vivamus eget ipsum sit amet ipsum tincidunt fermentum.    </p>

      <?php
        if(isset($_GET['status'])){
        $status = $_GET['status'];
        if(strcmp($status, "success")){
          echo '<h3 style="color: green;">mail sent successfully</h3>';
          }else{
          echo '<h3 style="color: green;">mail sent successfully</h3>';
          }
         } 
      ?>



      <form action="contact.php" method="post" id="contactform">
        <ol>
          <li>
            <label for="name">First Name<a href="#">*</a><br />
            </label>
            <input name="name" class="text" id="name" />
          </li>
          <li>
            <label for="label2">Company name<a href="#">*</a><br />
            </label>
            <input id="label2" name="company_name" class="text" />
          </li>
          <li>
            <label for="email">Your email<br />
            </label>
            <input id="email" name="email" class="text" />
          </li>
          <li>
            <label for="label">Subject<br />
            </label>
            <input id="label" name="subject" class="text" />
          </li>
          <li>
            <label for="message">Message<a href="#">*</a><br />
            </label>
            <textarea id="message" name="message" rows="6" cols="50"></textarea>
          </li>
          <li class="buttons">
            <input type="image" name="imageField2" id="imageField2" src="images/but_send_message.gif" />
          </li>
        </ol>
      </form>
    </div>
    <div class="clr"></div>
  </div>
</div>
<?php
include("footer.php");
?>