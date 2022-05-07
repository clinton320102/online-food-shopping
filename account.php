<!DOCTYPE html>
<html lang="en">

  <?php include('template/header.php') ?>

  <div class="account">
    <div class="container inner-container">
      <div class="signup-form" data-aos="fade-left">
        <div>
          <h1>Create an account</h1>
          <p class="sub-text">Get a chance to win reward!</p>
        </div>
        <form action="">
          <input type="text" placeholder="Phone or Email">
          <input type="text" placeholder="Create Username">
          <input type="password" placeholder="Create a Password">
          <input type="password" placeholder="Repeat your Password">
          <input class="signup-btn" type="submit" name="submit" value="Sign Up">
        </form>
        <div class="open-login">
          <button class="btn-open-login" type="button">Already have an account?</button>
        </div>
      </div>

      <div class="login-form">
        <h1>Sign in</h1>
        <form action="">
          <input type="text" placeholder="Username, Phone or Email">
          <input type="password" placeholder="Password">
          <button class="login-btn">Continue</button>
        </form>
        <div class="open-signup">
          <button id="openSignUp" class="btn-open-signup" type="button">Sign up instead</button>
        </div>
      </div>
    </div>
  </div>

  <?php include('template/footer.php') ?>
  
  
</html>