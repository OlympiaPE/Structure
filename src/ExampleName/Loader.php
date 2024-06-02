<?php

namespace ExampleName;

use ExampleName\handlers\Handlers;
use ExampleName\libraries\CortexPE\Commando\exception\HookAlreadyRegistered;
use ExampleName\libraries\CortexPE\Commando\PacketHooker;
use ExampleName\libraries\muqsit\invmenu\InvMenuHandler;
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
        if(!PacketHooker::isRegistered()) {
            PacketHooker::register($this);
        }
        if(!InvMenuHandler::isRegistered()) {
            InvMenuHandler::register($this);
        }

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
