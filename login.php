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
<?php if(!isLoggedIn()): ?>
<h1><strong>Welcome</a></strong></h1>
<button  name="submit" type="submit" class="btn btn-default" style="border-radius: 30px 30px 30px 30px;width: 180px; height: 30px;background-color:#000000 ; color:#FFFFFF ;"><a href="logout.php" style="text-decoration: none; color:#FFFFFF ;">Logout</a></button><br><br>
<?php else:  ?>
Kindly enter Valid Email and Password<br>	
 <?php endif;  ?>
</body>

<?php 
  session_start(); 
    function check_password($email, $password){
        $file = 'usersInfo/chuks.txt';
        if(!$fh = fopen($file, "r")) {die("<p>Could not open file");}
        $match = 0;
        $pwd = md5($password);
        while(!feof($fh)) {
          $line = fgets($fh);
          $user_pass = explode(":", $line);
          if($user_pass[0] == $email) {
            if(rtrim($user_pass[1]) == $pwd) {
              $match = 1;
              break;
            }
          }
          $match = 2; 
        }
        if($match == '1') {
           echo "<b>Login Failed!</b><br>";
        } 
        if($match == '2') {
           echo "<b>Login Success!</b>";
        } 
        fclose($fh);
    }
    if(isset($_POST['login'])) {
        check_password($_POST['email'], $_POST['password']);
    }




















 




  



		
