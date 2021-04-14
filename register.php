 <body style="position: absolute; top: 0; left: 0; bottom: 0; right: 0;  height:50%; max-width: 500px; margin: auto; text-align: center; background-color:#A9A9A9;">
<h1><strong><a style="text-decoration: none; color:#000000 ;" href="index.php">Zuri Auth</a></strong></h1>
<!-- This contains the parameter forms -->
 <form role='form' method="post" action="process.php">
    <div class="form-group">
   <strong><label for="exampleName">First Name*</label></strong>
   <input name= "firstName"type="text" class="form-control" id="exampleName" placeholder="Enter your First Name">
 </div>
  <br>
  <div class="form-group">
      <strong><label for="exampleName">Last Name*</label></strong>
      <input name= "lastName"type="text" class="form-control" id="exampleName" placeholder="Enter your Last Name">
        </div>
        <br>
     <div class="form-group">   
    <strong><label for="exampleInputEmail1">Email Address*</label></strong>
    <input name= "email"type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
  </div>
  <br>
  <div class="form-group">
    <strong><label for="exampleInputPassword1">Password*</label></strong>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <br>
  <div class="form-group">
    <strong><label for="exampleInputPassword1">Confirm Password*</label></strong>
    <input name="password1" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password Again">
  </div>
  <br>
   <button name="submit" type="submit" class="btn btn-default" style="border-radius: 30px 30px 30px 30px;width: 180px; height: 30px;background-color:#000000 ; color:#FFFFFF ;">Create Account</button>
</form>
</div>
</body>


