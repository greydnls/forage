<?php namespace Kayladnls\Forage\Reader;

use Kayladnls\Forage\Feed\Feed;
use SebastianBergmann\Exporter\Exception;

/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 12/11/14
 * Time: 9:22 PM
 */

class RssReader implements ReaderInterface
{
    private static $rss;
    /**
     * @param $xml to read RSS feed from
     */
    static public function read($xml)
    {
        if (! $xml instanceof \SimpleXMLElement ) throw new Exception;

        self::$rss = json_decode(json_encode($xml),TRUE);

        $feed = self::createFeed();
        self::parseItems();
    }

    static public function createFeed()
    {
        if (isset(self::$rss['channel']))
        {
            $channel = self::$rss['channel'];
            $feed = new Feed();
            $feed->setTitle($channel['title']);
            $feed->setLink($channel['link']);
            $feed->setLastUpdatedDate($channel['lastBuildDate']);
            $feed->setLanguage($channel['language']);
            $feed->setLogo($channel['image']);
            $feed->setGenerator($channel['generator']);
        }
        else
        {
            $feed = new Feed(self::$rss['id']);
            $feed->setLastUpdatedDate(self::$rss['updated']);
            $feed->setTitle(self::$rss['title']);
            $feed->setLogo(self::$rss['logo']);
            $feed->setGenerator(self::$rss['generator']);
        }
    }

    static public function parseItems()
    {

    }
} 