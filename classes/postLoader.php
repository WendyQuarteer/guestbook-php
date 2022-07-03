<?php
declare(strict_types=1);

class PostLoader
{
    //property for class PostLoader.
    private array $post;

    //function to add a post.//needs to be public.
    public function addPost(Post $post)
    {
        //push the post inside the array.
        $this->post[] = $post;
        //$post = (array)$post;
        //var_dump($post);
        $json = json_encode($post);
        //var_dump($json);
        $save = file_put_contents('view/post.txt', $json);
        var_dump($save);
        echo $this->post;

    }

    //function to save a post.//needs to be public.
    public function savePost($post)
    {
       // $this->addPost($post);
        //JSON is a data container used to send, receive and store variables.
        //$json = json_encode($post);
        //var_dump($json);
        //The post array will be returned as string (thanks to the json encode), inside the post.txt-file.
        //file_put_contents('view/post.txt', $json);
        //var_dump(json_encode(json_encode($post), JSON_PRETTY_PRINT));
    }

    /**
     * @return array
     */
    //getter for the post.//needs to be public.
    public function getPost(): array
    {
        return $this->post;
    }

}