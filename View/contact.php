
<html>
<?php
include "include_header.php";
include "include_navbar.php";
?>
<body>
  <!-- Contact -->
    <div class="container" id="contact" style="margin-top:55px">
      <h1 class="w3-xxxlarge w3-text-white"><b>Contact.</b></h1>
      <form action="/action_page.php" target="_blank">
        <div class="w3-section w3-text-white">
          <label>Name</label>
          <input class="w3-input w3-border" type="text" name="Name" required>
        </div>
        <div class="w3-section w3-text-white">
          <label>Email</label>
          <input class="w3-input w3-border" type="text" name="Email" required>
        </div>
        <div class="w3-section w3-text-white">
          <label>Message</label>
          <input class="w3-input w3-border" type="text" name="Message" required>
        </div>
        <button type="submit" name="messagebtn" class="btn btn-primary">Send Message</button>
      </form>
    </div>


</body>
<footer>
<?php
include "include_footer.php";
?>
</footer>

<!-- guide: http://form.guide/contact-form/php-email-contact-form.html -->
