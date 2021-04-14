 <?php   
if (function_exists("isLoggedIn") ===FALSE ) {
  function isLoggedIn(){
      if(isset($_SESSION['is_logged_in'])){
         return true;
      }else {
         return false;
      }
   }; 
}
 ?>
 <body style="position: absolute; top: 0; left: 0; bottom: 0; right: 0;  height:50%; max-width: 500px; margin: auto; text-align: center; background-color:#A9A9A9;">
<h1><strong><a style="text-decoration: none; color:#000000 ;" href="index.php">Zuri Auth</a></strong></h1>
 <?php if(isLoggedIn()): ?>
<button  name="submit" type="submit" class="btn btn-default" style="border-radius: 30px 30px 30px 30px;width: 180px; height: 30px;background-color:#000000 ; color:#FFFFFF ;"><a href="logout.php" style="text-decoration: none; color:#FFFFFF ;">Logout</a></button><br><br>
<?php else:  ?>
 <?php endif;  ?>

  <?php if(!isLoggedIn()): ?>
  <button  name="submit" type="submit" class="btn btn-default" style="border-radius: 30px 30px 30px 30px;width: 180px; height: 30px;background-color:#000000 ; color:#FFFFFF ;"><a href="register.php" style="text-decoration: none; color:#FFFFFF ;">Register</a></button><br><br>
 <?php endif;  ?>
</body>

<?php  

if(isset($_POST['submit'])) 
{
  $errorMessage = "";
  if(empty($_POST['firstName'])) 
  {
    $errorMessage .="<li>You forgot to enter your firstName</li>";
  }
  if(empty($_POST['lastName'])) 
  {
    $errorMessage .="<li>You forgot to enter your lastName</li>";
  }
  if(empty($_POST['email'])) 
  {
    $errorMessage .="<li>You forgot to enter your email</li>";
  }
  if(empty($_POST['password'])) 
  {
    $errorMessage .="<li>You forgot to enter your password</li>";
  }
  if(empty($_POST['password1'])) 
  {
    $errorMessage .="<li>kindly enter same password</li>";
  }

      $firstName  = $_POST['firstName'];
      $lastName   = $_POST['lastName'];
      $email      = $_POST['email'];
      $password   = md5($_POST['password']);
      $password1  = md5($_POST['password1']);

             $usersArray = [
                'firstName' => $firstName,
                'lastName'  => $lastName,
                'email'     => $email,
                'password'  => $password,
                'password1' => $password1
   ];
             if (!empty($errorMessage)) {
               echo ("<p>There was an error with your form</p>\n");
               echo ("<ul>" .$errorMessage . "</ul>\n");
             }
             else{
                echo "Account created<br><br>, Welcome.<br>".$firstName;
                header('Refresh: 2; URL = login.php');

        file_put_contents('usersInfo/'. $usersArray['firstName'] . ".txt" , $usersArray);
       
             }

     
       

  
  }



