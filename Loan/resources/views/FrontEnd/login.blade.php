<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  </head>
  <style> 
        body {
  background-color: whitesmoke;
  font-family: "Roboto", sans-serif;
}

.signup-box {
  padding: 2rem;
  width: 360px;
  margin: auto;
  background-color: white;
  border-radius: 3px;
}

.login-box {
  width: 360px;
  height: 280px;
  margin: auto;
  border-radius: 3px;
  background-color: white;
}

input[type="submit"] {
  /* background-color: #00693c;
  color: white;
  border: 3px solid #00693c;
  border-radius: 5px;
  cursor: pointer; */
  width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color:  #fc4fdf;
  color: white;
  font-size: 18px;
  cursor: pointer;
}

h1 {
  text-align: center;
  padding-top: 15px;
}

h4 {
  text-align: center;
}

form {
  width: 100%;
  display: flex;
  align-items: center;
  flex-direction: column;
}

form label {
  display: flex;
  font-size: 18px;
  margin-top: 1rem;
  margin-bottom: 0.3rem;
}

form input {
  width: 300px;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 6px;
  outline: none;
}
input[type="button"] {
  width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #fc4fdf;
  color: white;
  font-size: 18px;
  cursor: pointer;
}
p {
  text-align: center;
  padding-top: 20px;
  font-size: 15px;
}
.para-2 {
  text-align: center;
  color: black;
  font-size: 15px;
  margin-top: -10px;
}
.para-2 a {
  color:  #fc4fdf;
}
.signup-btn {
  background:  #fc4fdf;
  padding: 1rem 0;
  color: white;
  border-radius: 6px;
  border: none;
  font-size: 1.1rem;
  width: 80%;
  margin-top: 1rem;
}
</style>
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
