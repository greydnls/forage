Forage
==========
Forage is a simple, easy to use package for reading content streams. It's initial usecase is to read RSS feeds, but it is written to be intentionally extensible. For instance, if you wanted to use Forage to read content from a JSON api, that would be possible. 

###Readers
By default the package comes with `RssReader`. Other readers may be added in the future. To create a custom reader, implement `ReaderInterface`. 

###Feed Items
Audio (ie: from podcasts), Video (ie: from Youtube) and Blogs are all able to use RSS. Each of these items has a slightly different structure. 

This package comes with    `BlogItem`, `VideoItem`, and `AudioItem`. Other items can be created by implementing     `ItemInterface`

###Usage

```
Use Kayladnls\Forage\Forage;

$feed = Forage::createFeed('http://feedurl.com');

foreach ($feed->getItems() as $item)
{
     //do something cool with the item. 
}
````
`$feed->getItems()` returns an instance of `ItemCollection` and is iterable, sortable and filterable. 

````
$items = $feed->getItems();

$items->sort(function($i){
    return $i->category == "My Little Pony";
});
````

All dates withing a feed or FeedItem are instances of `Carbon/Carbon`, all carbon functions can be used for comparison and sorting. 
