<?php
declare(strict_types=1);


class Post {
    private string $title;
    private DateTime $date;
    private string $content;
    private string $author;

    /**
     * @param string $title
     * @param string $date
     * @param string $content
     * @param string $author
     */
    public function __construct(string $title, string $date, string $content, string $author)
    {
        $this->title = trim($title);
        $this->date = new DateTime();
        $this->content = trim($content);
        $this->author = trim($author);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date->format();
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }



}