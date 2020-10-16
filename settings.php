<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $_SESSION['userUid'] ?>'s Settings</title>
</head>
<body>
<?php
    echo '
    <div class="container">
    <form action="#">
    <input class="input" style="cursor: not-allowed;" type="text" placeholder="'.$_SESSION['userMail'].'" id="lname" name="lname" disabled=""><br><br>
    <input class="input" type="text" placeholder="'.$_SESSION['userUid'].'" id="lname" name="lname" disabled=""><br><br>
    <button class="submit">Save Changes</button>
    <a class="signuplink" href="/dashboard.php.php">Or back to home page</a>
    </form>
    </div>';
?>
</body>