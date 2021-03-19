<?php include 'views/header.php'; ?>

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
                            <h3 class="post-title">Title2</h3>
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

<?php include 'views/footer.php';
