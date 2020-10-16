<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/61b19d8903.js" crossorigin="anonymous"></script>
    <title>Signup - Twitler Support</title>
</head>
<body>
    <div class="container">
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-Mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button class="submit" type="submit" name="signup-submit">Signup</button>
            <?php
                                    if (isset($_GET['error'])) {
                                        if ($_GET['error'] == 'emptyfields') {
                                            echo '<p class="invalid">Please fill out all the fields!</p>';
                                        }

                                        else if ($_GET['error'] == 'passwordcheck') {
                                            echo '<p class="invalid">Your passwords do not match!</p>';
                                        }

                                        else if ($_GET['error'] == 'usertaken') {
                                            echo '<p class="invalid">That username is taken!</p>';
                                        }
                                    }
                                ?>
            <a class="signuplink" href="login.php">Back to login</a>
        </form>
    </div>
    </body>
</html>