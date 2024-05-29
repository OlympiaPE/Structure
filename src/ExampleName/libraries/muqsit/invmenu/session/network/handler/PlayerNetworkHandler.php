<?php

declare(strict_types=1);

namespace ExampleName\librairies\muqsit\invmenu\session\network\handler;

use Closure;
use ExampleName\librairies\muqsit\invmenu\session\network\NetworkStackLatencyEntry;

interface PlayerNetworkHandler{

	public function createNetworkStackLatencyEntry(Closure $then) : NetworkStackLatencyEntry;
}