<?php

include '../includes/header.php';

?>

<div class="container">
 <div class="image">
  <img src="../img/wohnmobil.jpg" alt="wohnmobil" style="width:75%; opacity:0.4">
  <div id="centered">
      <p>Do you have any question? Contact us!</p>
  </div>
   </div>

       <div class="formarea">
  <form action="report.php" method="post" name="contactForm">
    <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Your name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="Your email" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="comment">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px" required></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</div>

   <!-- <div id="formarea">
   <form action="report.php" method="post"  id="comment">
    <fieldset>
         <legend>Contact Us</legend>
        <p>
            <label for="name">Name<span>*</span></label><br>
            <input id="name" name="name" minlength="2" type="text" required>

        </p>
        <p>
            <label for="email">Email<span>*</span></label><br>
            <input id="email" name="email"  type="email" required>

        </p>

        <p>
            <label for="comment">Your message</label><br>
            <textarea id="comment" name="comment" rows="20" cols="80" required></textarea>

        </p>

        <p>
            <input class="submit" type="submit" value="Submit">
        </p>

    </fieldset>


   </form>

    </div>-->
</div>


<?php

include '../includes/footer.php'

    ?>
