<?php

namespace ExampleName\handlers;

use pocketmine\utils\RegistryTrait;

/**
 //* @method static AntiVPN ANTI_VPN() example
 */
class Handlers
{
    use RegistryTrait;

    private function __construct() {}

    /**
     * @param string $name
     * @param Handler $handler
     * @return void
     */
    protected static function register(string $name, Handler $handler) : void{
        $handler->onLoad();
        self::_registryRegister($name, $handler);
    }

    /**
     * @return array
     */
    public static function getAll() : array{
        return self::_registryGetAll();
    }

    /**
     * @return void
     */
    public static function load(): void
    {
        self::checkInit();
    }

    /**
     * @return void
     */
    protected static function setup(): void
    {
    }
}