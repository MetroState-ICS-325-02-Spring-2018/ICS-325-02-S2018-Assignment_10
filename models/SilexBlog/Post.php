<?php

namespace SilexBlog;

class Post
{
    private $id, $author, $title, $created_date, $modified_date, $body;
    // $persisted is true when the data is saved and up-to-date in the database.
    private $persisted = false;

    // Basic constructor.  Pass null for $id when creating a new post that has not been persisted yet.
    public function __construct($id, $author, $title, $created_date, $modified_date, $body) {
        $this->id = $id;
        $this->author = $author;
        $this->title = $title;
        $this->created_date = $created_date;
        $this->modified_date = $modified_date;
        $this->body = $body;
    }
    
    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param null $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param null $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * @param null $created_date
     */
    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;
    }

    /**
     * @return string
     */
    public function getModifiedDate()
    {
        return $this->modified_date;
    }

    /**
     * @param null $modified_date
     */
    public function setModifiedDate($modified_date)
    {
        $this->modified_date = $modified_date;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return string
     */

    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param null $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return bool
     */
    public function getPersisted()
    {
        return $this->persisted;
    }

    /**
     * @param null $persisted
     */
    public function setPersisted($persisted)
    {
        $this->persisted = $persisted;
    }
}