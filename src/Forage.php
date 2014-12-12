<?php namespace Kayladnls\Forage;

use Kayladnls\Forage\Reader\RssReader;

class Forage
{
    /**
     * @param $url to read the feed from
     */
    static public function createFromRss($url)
    {
        $xml = simplexml_load_file($url);
        $rss_feed = RssReader::read($xml);
    }



} 