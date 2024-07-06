<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask'n Help - Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>Ask'n Help</h1>
        </div>
        <div class="right">
            <div class="signup-container">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <img src="img/logo.png" width="80">
                    <h3 class="display-4 fs-1 text-center">Create new Account</h3>
                </div>

                <p>Already Registered? <a href="index.php">Login</a></p>

                <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php echo htmlspecialchars($_GET['error']);?>
                </div>
                <?php } 
                
                if (isset($_GET['name'])) {
                    $name = $_GET['name'];
                } else {
                    $name = '';
                }

                if (isset($_GET['username'])) {
                    $username = $_GET['username'];
                } else {
                    $username = '';
                }
                ?>

                <form method="post" action="app/http/signup.php" enctype="multipart/form-data">
                    <label for="name">Please enter your name</label>
                    <input type="text" id="name" name="name" value="<?=$name?>" required>

                    <label for="username">User Name</label>
                    <input type="text" id="username" name="username" value="<?=$username?>" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>

                    <label for="valid_id">Valid Id</label>
                    <input type="file" id="valid_id" name="valid_id" required>

                    <label for="profilePicture">Profile Picture</label>
                    <input type="file" id="profilePicture" name="pp">

                    <div class="button-group">
                        <button type="submit" class="signup">SIGN UP</button>
                        <a href="index.php" class="login">LOGIN</a>
                    </div>
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
