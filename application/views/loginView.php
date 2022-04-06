<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url("/assets/css/login.css"); ?>" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="wrapper bg-white">
    <div class="h2 text-center">TIGA SERANGKAI</div>
    <div class="h4 text-muted text-center pt-2">Enter your login details</div>
    <form class="pt-3" method="post" action="<?php echo base_url('login/auth') ?>">
        <div class="form-group py-2">
            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="email" name="email" placeholder="Email Address" required class=""> </div>
        </div>
        <div class="form-group py-1 pb-2">
            <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="password" name="password" placeholder="Enter your Password" required class=""> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
        </div>
        <div class="d-flex align-items-start">
            <div class="remember"> <label class="option text-muted"> Remember me <input type="radio" name="radio"> <span class="checkmark"></span> </label> </div>
            <!-- <div class="ml-auto"> <a href="#" id="forgot">Forgot Password?</a> </div> -->
        </div> 
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-block text-center my-3" type="submit">Log in</button>
        </div>
        <div class="text-center pt-3 text-muted">Not a member? <a href=<?php echo base_url('Login/register') ?>>Register</a></div>
    </form>
</div>
</body>
</html>