<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Quit Smoking Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body
<div>
    <?php echo form_open('login/validate', 'class="form-signin"'); ?>
    <h2 class="form-signin-heading">Please login</h2>
    <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus=""/>
    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <?php echo form_close(); ?>
</div>
</body>
</html>
