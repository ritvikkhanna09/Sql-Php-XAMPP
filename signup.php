<?php
include('server.php');
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="signup.php" method="post">
    <h1>Sign Up</h1>  
    <fieldset>
      <label for="name">Username:</label>
      <input type="text" id="name" name="user_name" value="<?php echo $username; ?>">
      
      <label for="mail">Email:</label>
      <input type="email" id="mail" name="user_email" value="<?php echo $email; ?>">
      
      <label>Password:</label>
      <input type="password" id="password" name="user_password">
      <label>Confirm Password:</label>
      <input type="password" id="password" name="user_password_confirm">
    </fieldset>
    <?php include('errors.php'); ?>
    <button type="submit" name="sign_up">Sign Up</button>
    <h4>Already a user? <a href="login.php">Login Here</a></h4>
  </form>  
</body>
</html>
