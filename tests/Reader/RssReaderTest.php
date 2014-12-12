<?php
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 12/11/14
 * Time: 11:56 PM
 */

class RssReaderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     */
    public function testMustReadXML()
    {
        \Kayladnls\Forage\Reader\RssReader::read('BoomShakaLaka');
    }
} 