<?php
declare(strict_types=1);

require 'classes/post.php';
require 'classes/postLoader.php';
require 'view/header.php';
require 'view/body.php';
require 'view/footer.php';

//check if form is submitted
if (isset($_POST["submit"])) {

    //ensure that the following code will only happen AFTER the posting of the form:
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //echo 'The request was POST';

        //a new postLoader is created.
        $postLoader = new PostLoader();
        //var_dump($postLoader);

        //add a new post-object with the values of the parameters.
        $post = new Post($_POST['title'], $_POST['name'], $_POST['text']);
        var_dump(json_encode($post));
        $postLoader->addPost($post);
        //var_dump($post);




    }
}



