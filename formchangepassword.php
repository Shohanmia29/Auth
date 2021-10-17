<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('location: http://localhost/Auth/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Change Password</h2>
    <form action="changepassword.php" method="post">
        <div class="form-group">
            <label for="pwd">Old password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="old_password">
        </div>
        <div class="form-group">
            <label for="pwd">New Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="new_password">
        </div>
        <div class="form-group">
            <label for="pwd">Confirm Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="confrim_password">
        </div>

        <button type="submit" class="btn btn-primary">Change password</button>
    </form>
</div>

</body>
</html>
