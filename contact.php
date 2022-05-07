 <!DOCTYPE html>
<html lang="en">

  <?php include('template/header.php'); ?>

  <div class="contact">
    <div class="container inner-container">
      <div class="left-container" data-aos="fade-right">
        <header class="header-left-container">
          <h1>GET IN TOUCH</h1>
        </header>
        <p class="address"><i class="fa fa-map-marker"></i> 12 Aguinaldo Street, San Antonio, Pasig City</p>
        <p class="contact-num"><i class="fa fa-phone"></i> 7001 7961 / +63458333012</p>
        <a href="" class="email"> <i class="fa fa-envelope"></i> kfoodie@gmail.com</a> <br><br>
        <a href="https://www.facebook.com/klennnn/" class="facebook"><i class="fa fa-facebook"></i> facebook.com/kfoodie</a>
      </div>

      <div class="right-container" data-aos="fade-left">
        <header class="header-right-container">
          <h1>Message Us</h1>
        </header>
        <form class="form" action="contact.php" method="POST">
          <div class="input">
            <input type="text" name="name" placeholder="Enter Name">
            <input type="text" name="email" placeholder="Enter Email*">
            <textarea name="message" id="message" cols="30" rows="8" placeholder="Enter Message"></textarea>
          </div>
          <div class="bottom">
            <button class="btn btn-submit" type="submit" name="submit">Submit</button>
            <?php 
              if(isset($_POST['submit'])) {
                echo "<h3>Hello ".$_POST['name'].", your message has been sent &#10003;</h3>";
              }
            ?>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include('template/footer.php'); ?>
  
</html>