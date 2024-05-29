<?php

namespace ExampleName\managers;

use ExampleName\managers\types\ListenerManager;
use pocketmine\utils\RegistryTrait;

/**
 * @method static ListenerManager LISTENER()
 */
class Managers
{
    use RegistryTrait;

    private function __construct() {}

    /**
     * @param string $name
     * @param object $manager
     * @return void
     */
    protected static function register(string $name, Manager $manager) : void{
        $manager->onLoad();
        self::_registryRegister($name, $manager);
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
        self::register("listener", new ListenerManager());
    }
}