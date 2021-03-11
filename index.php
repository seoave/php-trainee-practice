<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts list</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <div class="menu border-bottom">
                <ul class="nav top-menu">
                    <li class="nav-item menu-item"><a class="nav-link" href="/">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<main class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <h1>Home</h1>
        </div>
        <div class="row post-list">
            <div class="post-card">
                <div class="row">
                    <div class="col image-col">
                        <figure class="figure">
                            <img src="assets/images/pic1.jpg" class="figure-img img-fluid" alt="...">
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>
                    </div>
                    <div class="col content-col">
                        <h3 class="post-title">Title</h3>
                        <div class="post-card-content">
                            <p>text</p>
                            <p><a href="#">Read more...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-card">
                <div class="row">
                    <div class="col image-col">
                        <figure class="figure">
                            <img src="assets/images/pic2.jpg" class="figure-img img-fluid" alt="...">
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>
                    </div>
                    <div class="col content-col">
                        <h3 class="post-title">Title</h3>
                        <div class="post-card-content">
                            <p>text</p>
                            <p><a href="#">Read more...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="footer-content">
                <p>2021</p>
            </div>
        </div>
    </div>
</footer>


</body>
</html>
