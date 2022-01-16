<?php

include 'views/header.php';
include 'views/layout.php';
?>
<div class="container">
    <div class="row">
        <form class="login-form" action="">
            <h1 class="text-center">Login</h1>
            <div class="mb-3">
                <label for="loginFormInputLogin" class="form-label">Login</label>
                <input class="form-control" id="loginFormInputLogin" name="loginFormInputLogin" type="text"
                       placeholder="Enter your login name">
            </div>
            <div class="mb-3">
                <label for="loginFormInputPassword" class="form-label">Password</label>
                <input class="form-control" id="loginFormInputPassword" name="loginFormInputPassword" type="password"
                       placeholder="Enter your password">
            </div>
            <button type="submit" class="w-100 btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php include 'views/footer.php'; ?>
