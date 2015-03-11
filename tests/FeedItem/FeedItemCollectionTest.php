<?php
use Kayladnls\Forage\FeedItem\AudioItem;
use Kayladnls\Forage\FeedItem\BlogItem;
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
        new FeedItemCollection(array('1'));
    }

    /**
     * @expectedException Kayladnls\Forage\FeedItem\InvalidFeedItemException
     */
    public function testMustMakeWithFeedItem()
    {
        FeedItemCollection::make(array('1'));
    }

    public function testItCanHoldFeedItems()
    {
        $items = array(new AudioItem(), new BlogItem());

        $collection = FeedItemCollection::make($items);

        $this->assertCount(2, $collection);
    }
}
