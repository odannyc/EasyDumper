<?php

/*
 * This file is part of the test EasyDumper package.
 *
 * Danny Carrillo <odannycx@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Used to test Pings to different IP addresses.
 */
class DumperTest extends PHPUnit_Framework_TestCase
{
    /**
     * Just dumps a simple array. Test to see if what it dumps is correct.
     *
     * @return assertion
     */
    public function testPingToLiveIp()
    {
        $randomArray = [
            "test" => "array",
            "im" => "cool",
            "danny" => "is awesome",
            "just" => "random gibberish"
        ];

        $randomArray2 = [
            "more" => "stuff",
            "hello" => "2",
        ];

        $randomVar = 12122;

        d($randomArray);
    }
}
