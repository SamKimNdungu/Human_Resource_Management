<!DOCTYPE html>
<?php
include 'login_sql.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="index.css"/>
    </head>
    
    <body>
              <div class="center">
        <h1>Consolata Missionaries</h1>
        <form action="index.php" method="post">
                <div class="txt_field">
             <input type="text" name="username" required>
                <label>Username</label>  
                 </div>
                      <div class="txt_field">
           <input type="password" name="pass" required>
                <label>Password</label>
          </div>
                <div class="pass">Forgot Password?</div>
                <input type="submit" value="Login">  
                <div class="signup_link">
                  Not a Member?  <a href="#">Sign up</a>
                </div>       
       </form>
              </div>
      
    </body>
</html>
