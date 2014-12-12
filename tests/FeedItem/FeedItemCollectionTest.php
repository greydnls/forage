<?php
use Kayladnls\Forage\FeedItem\FeedItemCollection;

/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 12/11/14
 * Time: 9:51 PM
 */

class FeedItemCollectionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Kayladnls\Forage\FeedItem\InvalidFeedItemException
     */
    public function testMustBeInstantiatedWithFeedItem()
    {
        $collection = new FeedItemCollection(array('1'));
    }

    /**
     * @expectedException Kayladnls\Forage\FeedItem\InvalidFeedItemException
     */
    public function testMustMakeWithFeedItem()
    {
        $collection = FeedItemCollection::make(array('1'));
    }

} 