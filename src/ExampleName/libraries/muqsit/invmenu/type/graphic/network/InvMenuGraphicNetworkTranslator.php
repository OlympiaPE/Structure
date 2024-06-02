<?php

declare(strict_types=1);

namespace ExampleName\libraries\muqsit\invmenu\type\graphic\network;

use ExampleName\libraries\muqsit\invmenu\session\InvMenuInfo;
use ExampleName\libraries\muqsit\invmenu\session\PlayerSession;
use pocketmine\network\mcpe\protocol\ContainerOpenPacket;

interface InvMenuGraphicNetworkTranslator{

	public function translate(PlayerSession $session, InvMenuInfo $current, ContainerOpenPacket $packet) : void;
}