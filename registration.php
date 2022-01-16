<?php
include 'views/header.php';
include 'views/layout.php'; ?>
<div class="container">
    <div class="row">
        <form class="register-form" action="">
            <h1 class="text-center">Registration</h1>
            <div class="mb-3">
                <label for="registerFormInputLogin" class="form-label">Select your login name</label>
                <input class="form-control" id="registerFormInputLogin" name="registerFormInputLogin" type="text"
                       placeholder="Enter your login name">
            </div>
            <div class="mb-3">
                <label for="registerFormInputEmail" class="form-label">Your email</label>
                <input class="form-control" id="registerFormInputEmail" name="registerFormInputEmail" type="email"
                       placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="loginFormInputPassword" class="form-label">Password</label>
                <input class="form-control" id="loginFormInputPassword" name="loginFormInputPassword" type="password"
                       placeholder="Enter your password">
            </div>
            <button type="submit" class="w-100 btn btn-primary">Register</button>
        </form>
    </div>
</div>
<?php include 'views/footer.php'; ?>
