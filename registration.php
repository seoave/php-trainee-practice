<?php include 'views/header.php'; ?>

    <main class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="form-content">
                    <h1>Registration</h1>
                    <form class="userForm" method="post">
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="userEmail" name="userEmail"
                                   aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="userPass" name="userPass">
                        </div>
                        <button type="submit" class="btn btn-primary">Registration</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php include 'views/footer.php';
