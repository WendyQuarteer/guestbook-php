<?php
declare(strict_types=1);

require 'classes/post.php';
require 'classes/postLoader.php';
require 'view/header.php';
require 'view/body.php';
require 'view/footer.php';

$postLoader = new PostLoader();
    if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
        $postLoader
    }




if (isset($_POST["submit"])) {
    loadPost();
}