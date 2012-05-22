<?php

namespace timbrr\codex\Core;

class Core
{
    private static $version = '1.0.0-dev';
    protected static $config = array(), $objects = array();

    public static function getVersion()
    {
        return self::$version;
    }

    public static function setConfig($config_name, $config_value)
    {
        self::$config[$config_name] = $config_value;
    }

    public static function getConfig($config_name)
    {
        if(!isset(self::$config[$config_name]))
        {
            return NULL;
        }

        return self::$config[$config_name];
    }

    public static function setObject($slot, $object)
    {
        self::$objects[(string) $slot] = $object;

        return $object;
    }

    public static function getObject($slot)
    {
        if(!isset(self::$objects[(string) $slot]))
        {
            return NULL;
        }

        return self::$objects[(string) $slot];
    }
}