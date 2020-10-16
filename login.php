<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/61b19d8903.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Login - Hue</title>
</script>
</head>
<body>
    <div class="info">
        <h2>Welcome to Twitler Support</h2>
        <p>Please login to go to the dashboard...</p>
    </div>
<div class="container">
<form action="includes/login.inc.php" method="post">
                                <input type="text" name="mailuid" placeholder="Username">
                                <input type="password" name="pwd" placeholder="Password">
                                <button class="submit" type="submit" name="login-submit">Login</button>
                                <?php
                                    if (isset($_GET['error'])) {
                                        if ($_GET['error'] == 'emptyfields') {
                                            echo '<p class="invalid">Please fill out all the fields!</p>';
                                        }

                                        else if ($_GET['error'] == 'wrongpwd') {
                                            echo '<p class="invalid">Invalid Password!</p>';
                                        }

                                        else if ($_GET['error'] == 'nouser') {
                                            echo '<p class="invalid">That username does not exist!</p>';
                                        }
                                    }
                                ?>
                            </form>
                                <a class="signuplink" href="signup.php">Create an account</a>
</div>
</body>
</html>