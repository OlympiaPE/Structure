<?php

declare(strict_types=1);

namespace ExampleName\libraries\muqsit\invmenu\session\network\handler;

use Closure;
use ExampleName\libraries\muqsit\invmenu\session\network\NetworkStackLatencyEntry;

interface PlayerNetworkHandler{

	public function createNetworkStackLatencyEntry(Closure $then) : NetworkStackLatencyEntry;
}