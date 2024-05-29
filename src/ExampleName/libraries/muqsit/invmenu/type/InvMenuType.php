<?php

declare(strict_types=1);

namespace ExampleName\librairies\muqsit\invmenu\type;

use ExampleName\librairies\muqsit\invmenu\InvMenu;
use ExampleName\librairies\muqsit\invmenu\type\graphic\InvMenuGraphic;
use pocketmine\inventory\Inventory;
use pocketmine\player\Player;

interface InvMenuType{

	public function createGraphic(InvMenu $menu, Player $player) : ?InvMenuGraphic;

	public function createInventory() : Inventory;
}