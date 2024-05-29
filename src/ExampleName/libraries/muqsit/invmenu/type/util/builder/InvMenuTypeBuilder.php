<?php

declare(strict_types=1);

namespace ExampleName\librairies\muqsit\invmenu\type\util\builder;

use ExampleName\librairies\muqsit\invmenu\type\InvMenuType;

interface InvMenuTypeBuilder{

	public function build() : InvMenuType;
}