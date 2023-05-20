<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Infogram | Sign Up </title>
    <link rel="stylesheet" href="css/login.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
      <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>Create Your New Account Here</h4>
      <form onsubmit="return false" method="post" enctype="multipart/form-data">

        <div>
          <label>Name <strong style=" color: red"> *</strong></label>
          <input type="text" id="name" name="name" placeholder="" />
        </div>

        <div>
          <label>Email <strong style=" color: red"> *</strong></label>
          <input type="text" id="email" name="email" placeholder="" />
        </div>

        <div>
          <label>Password <strong style=" color: red"> *</strong></label>
          <input type="password" id="pwd" name="pwd" placeholder="" />
        </div>
        
        <div>
          <label>Profile Picture</label>
          <button id="upload_widget">Upload</button>
        </div>
        <button class="signup-btn" onclick="signUp()">Submit</button>
      </form>
      <p id="user-exist" style="color: red; display: none">User with this email already exist!</p>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.html">Login here</a>
    </p>

  
  </body>
</html>

