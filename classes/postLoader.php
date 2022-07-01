<?php
declare(strict_types=1);

class PostLoader {
    public function savePost($post){
        file_put_contents('post.txt', json_encode($post));
    }


}