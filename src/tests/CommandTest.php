<?php

namespace Slackbot\Tests;

use Slackbot\Command;

/**
 * Class CommandTest.
 */

/** @noinspection PhpUndefinedClassInspection */
class CommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test get.
     */
    public function testGet()
    {
        $info = (new Command())->get('ping');
        $this->assertEquals($info['plugin'], 'Ping');
    }

    /**
     * Test getAll.
     */
    public function testGetAll()
    {
        $commands = (new Command())->getAll();
        $this->assertEquals($commands['ping']['plugin'], 'Ping');
    }
}
