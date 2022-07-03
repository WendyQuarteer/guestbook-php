<?php
declare(strict_types=1);


class Post {
    //properties for class Post.
    private string $title;
    private DateTime $date;
    private string $content;
    private string $author;

    /**
     * @param string $title
     * @param string $content
     * @param string $author
     */
    public function __construct(string $title, string $content, string $author)
    {
        //Declare values for the post-properties+Remove white space.
        $this->title = trim($title);
        $this->date = new DateTime();//To create a new date and time object, you use the DateTime class.
        $this->content = trim($content);
        $this->author = trim($author);
    }

    /**
     * @return string
     */
    //getter for the title.
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    //getter for the date.
    public function getDate(): string
    {
        return $this->date->format('d, m, Y');//To format a DateTime object, you use the format() method.
    }

    /**
     * @return string
     */
    //getter for the content.
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    //getter for the author.
    public function getAuthor(): string
    {
        return $this->author;
    }





}