<?php namespace Kayladnls\Forage\FeedItem;

use Illuminate\Support\Collection;

/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 12/11/14
 * Time: 9:46 PM
 */

class FeedItemCollection extends Collection
{
    /**
     * @param array $items
     * @throws \Kayladnls\Forage\FeedItem\InvalidFeedItemException
     */
    public function __construct($items = [])
    {
        foreach ($items as $item)
        {
            if (! $item instanceof FeedItemInterface) throw new InvalidFeedItemException;
        }

        parent::__construct($items);
    }
}
