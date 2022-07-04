<?php
declare(strict_types=1);

class PostLoader
{
    //property for class PostLoader.
    public array $posted;

    //function to add a post.//needs to be public.
    public function addPost(Post $post)
    {

        $this->posted[] = $post;//push the post inside the array.
        $temporary = [];
        foreach ($this->posted as $message) {// each posted object
            $temporary[] = $message->expose();// will be exposed inside the temporary array.
        }
        //var_dump($temporary);

        //JSON is a data container used to send, receive and store variables.
        //The post array will be returned as string (thanks to the json encode), inside the post.txt-file.
        file_put_contents('view/post.txt', json_encode($temporary), FILE_APPEND);
    }
// TODO file append
// TODO load post



}