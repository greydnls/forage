<?php namespace Kayladnls\Forage\Feed;
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 12/11/14
 * Time: 10:09 PM
 */

class Feed
{
    private $id;
    private $title;
    private $link;
    private $description;
    private $last_updated_date;
    private $language;
    private $generator;
    private $items;
    private $logo;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getLastUpdatedDate()
    {
        return $this->last_updated_date;
    }

    /**
     * @param mixed $last_updated_date
     */
    public function setLastUpdatedDate($last_updated_date)
    {
        $this->last_updated_date = $last_updated_date;
    }

    function __construct($id = NULL)
    {
        $this->id = $id ?: uniqid();
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $image = new FeedImage();
        if (is_array($logo))
        {
            $image->setLink($logo['link']);
            $image->setUrl($logo['url']);
            $image->setTitle($logo['title']);
        }
        else
        {
            $image->setUrl($logo);
        }
        $this->logo = $image;
    }

    /**
     * @return mixed
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * @param mixed $generator
     */
    public function setGenerator($generator)
    {
        $this->generator = $generator;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }


} 