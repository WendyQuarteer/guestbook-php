<?php
declare(strict_types=1);

class PostLoader
{
    //property for class PostLoader.
    public array $posted;


    //function to add a post.//needs to be public.
    public function addPost(Post $post)
    {
        //push the post inside the array.
        $this->posted[] = $post;
        file_put_contents('view/post.txt', json_encode($this->posted), FILE_APPEND);


    }




}