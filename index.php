<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ask'n Help - Login</title>
	<link rel="stylesheet" href="index.css">
  </head>
  
  <body>
    <div class="container">
      <div class="left">
        <h1>Ask'n Help</h1>
      </div>
      <div class="right">
        <div class="login-container">
          <h2>Login</h2>
          <p>Sign in to continue <a href="signup.php">Sign Up</a></p>
          <form method="post" action="app/http/auth.php">
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-warning" role="alert">
              <?php echo htmlspecialchars($_GET['error']);?>
            </div>
            <?php } ?>
            
            <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-success" role="alert">
              <?php echo htmlspecialchars($_GET['success']);?>
            </div>
            <?php } ?>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required />
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
            <button type="submit">LOGIN</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
  } else {
    header("Location: home.php");
    exit;
  }
?>
