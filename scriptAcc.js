// click to open and close (login form & sign up form)
const openLogin = document.querySelector(".btn-open-login");
const openSignUp = document.querySelector(".btn-open-signup");

if(openLogin) {
  openLogin.addEventListener('click', function() {
    document.querySelector('.signup-form').style.display = "none";
    document.querySelector('.login-form').style.display = "block";
  })
}

if(openSignUp) {
  openSignUp.addEventListener('click', function() {
    document.querySelector('.signup-form').style.display = "block";
    document.querySelector('.login-form').style.display = "none";
  })
}