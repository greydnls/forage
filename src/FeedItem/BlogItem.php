<?php namespace Kayladnls\Forage\FeedItem;
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 12/11/14
 * Time: 9:21 PM
 */

class BlogItem implements FeedItemInterface
{
    private $title;
    private $link;
    private $comments = array();
    private $pubDate;
    private $updatedDate;
    private $categories = array();
    private $guid;
    private $description;
} 