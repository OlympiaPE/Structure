<?php

declare(strict_types=1);

namespace ExampleName\libraries\muqsit\invmenu\session;

use ExampleName\libraries\muqsit\invmenu\InvMenu;
use ExampleName\libraries\muqsit\invmenu\type\graphic\InvMenuGraphic;

final class InvMenuInfo{

	public function __construct(
		readonly public InvMenu $menu,
		readonly public InvMenuGraphic $graphic,
		readonly public ?string $graphic_name
	){}
}