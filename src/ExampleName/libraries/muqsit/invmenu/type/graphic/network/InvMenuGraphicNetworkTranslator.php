<?php

declare(strict_types=1);

namespace ExampleName\librairies\muqsit\invmenu\type\graphic\network;

use ExampleName\librairies\muqsit\invmenu\session\InvMenuInfo;
use ExampleName\librairies\muqsit\invmenu\session\PlayerSession;
use pocketmine\network\mcpe\protocol\ContainerOpenPacket;

interface InvMenuGraphicNetworkTranslator{

	public function translate(PlayerSession $session, InvMenuInfo $current, ContainerOpenPacket $packet) : void;
}