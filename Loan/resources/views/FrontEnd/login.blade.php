<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Infogram | Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="signup-box">
      <h1>Login</h1>
      <form onsubmit="return false;">
        <div>
          <label>Email</label>
          <input id="email" type="email" placeholder="" />
        </div>
        <div>
          <label>Password</label>
          <input id="pwd" type="password" placeholder="" />
        </div>
        <p id="wrong-info" style="color: red; display: none">Wrong email or password!</p>
        <button onclick="Login()" class="signup-btn">Login</button>
      </form>
    </div>
    <script src="./scripts/login.js"></script>
    <p class="para-2">
      Not have an account? <a href="signup.html">Sign Up Here</a>
    </p>
    <script>
      
    </script>
  </body>
</html>
