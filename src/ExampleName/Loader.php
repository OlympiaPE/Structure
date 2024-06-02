<?php

namespace ExampleName;

use ExampleName\handlers\Handlers;
use ExampleName\librairies\CortexPE\Commando\exception\HookAlreadyRegistered;
use ExampleName\librairies\CortexPE\Commando\PacketHooker;
use ExampleName\librairies\muqsit\invmenu\InvMenuHandler;
use ExampleName\managers\Managers;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Loader extends PluginBase
{
    use SingletonTrait;

    /**
     * @return void
     */
    protected function onLoad(): void
    {
        self::setInstance($this);
    }

    /**
     * @return void
     * @throws HookAlreadyRegistered
     */
    protected function onEnable(): void
    {
        // Registering libraries
        PacketHooker::register($this);
        InvMenuHandler::register($this);

        Managers::load();
        Handlers::load();
    }

    protected function onDisable(): void
    {
        Managers::save();
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
        return parent::getFile();
    }
}
