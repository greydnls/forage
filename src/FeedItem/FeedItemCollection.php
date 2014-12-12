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
    public function __construct($items = array())
    {
        foreach ($items as $item)
        {
            if (! $item instanceof FeedItemInterface) throw new InvalidFeedItemException;
        }
    }

} 