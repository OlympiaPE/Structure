<?php

namespace ExampleName\listeners;

use ExampleName\entities\Session;
use ExampleName\librairies\SenseiTarzan\ExtraEvent\Class\EventAttribute;
use pocketmine\event\EventPriority;
use pocketmine\event\player\PlayerCreationEvent;

class SessionListener
{
    /**
     * @param PlayerCreationEvent $event
     * @return void
     */
    #[EventAttribute(EventPriority::NORMAL)]
    public function onPlayerCreation(PlayerCreationEvent $event): void
    {
        $event->setPlayerClass(Session::class);
    }
}