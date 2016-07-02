<?php
namespace VarnishAdmin\version;

class Version3 extends Version
{
    const NUMBER = 3;
    const URL = '.url';

    public function getPurgeUrlCommand()
    {
        $command = self::BAN . self::URL;
        return $command;
    }

    /**
     * @return string
     */
    public function getVersionNumber()
    {
        return self::NUMBER;
    }
}
