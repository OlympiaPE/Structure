<?php

declare(strict_types=1);

namespace ExampleName\libraries\muqsit\invmenu\type\util\builder;

use ExampleName\libraries\muqsit\invmenu\type\InvMenuType;

interface InvMenuTypeBuilder{

	public function build() : InvMenuType;
}