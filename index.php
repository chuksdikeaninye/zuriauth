<body style="position: absolute; top: 0; left: 0; bottom: 0; right: 0;  height:50%; max-width: 500px; margin: auto; text-align: center; background-color:#A9A9A9;">
<h1><strong><a style="text-decoration: none; color:#000000 ;" href="index.php">Zuri Auth</a></strong></h1>
<!-- This contains the parameter forms -->
<form role="form" method="post" action="login.php">
  <div class="form-group">
    <input name="email" type="Email" class="form-control" placeholder="Enter Email" style="border-radius: 30px 30px 30px 30px;">
  </div><br>
  <div class="form-group">
    <input name="password" type="password" class="form-control" placeholder="Enter password" style="border-radius: 30px 30px 30px 30px;">
  </div><br>
  <div class="access">
  	<button name="login" type="submit" class="btn btn-default" style="border-radius: 30px 30px 30px 30px;width: 180px; height: 30px;background-color:#000000 ; color:#FFFFFF ;">Login</button><br>
  	<br>
  </div>
  <div class="register">
  <button style="float: left;"><a style="text-decoration: none; color:#000000 ;"  href ="register.php"> Register</a></button><button style="float: right"><a style="text-decoration: none; color:#000000 ;"  href="forgotPassword.php">Forgot Password</button>
  </div>
</form>
</body>

  