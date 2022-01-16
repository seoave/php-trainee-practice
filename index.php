<?php

include 'views/header.php';
include 'views/layout.php';
$posts = require 'inc/db-posts.php';
$i = 1;
?>
<div class="container posts-container">
    <div class="row">
        <?php foreach ($posts as $post) :
            $postClasses = ($i % 2) == 0 ? 'gb-light border' : 'text-white bg-dark';
            $btnClass = ($i % 2) == 0 ? 'btn-outline-secondary' : 'btn-outline-light';
            ?>
            <div class="col-md-6 mb-3">
                <article class="p-5 rounded-3 <?php echo $postClasses; ?>">
                    <h3><?php echo $post['title']; ?></h3>
                    <?php echo $post['content']; ?>
                    <a href="<?php echo $post['link']; ?>" class="btn <?php echo $btnClass; ?>">Read
                        more...</a>
            </div>
        <?php $i++;
        endforeach;
        ?>
    </div>
    <?php include 'views/footer.php'; ?>
