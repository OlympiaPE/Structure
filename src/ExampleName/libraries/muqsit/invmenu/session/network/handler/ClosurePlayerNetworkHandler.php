<?php

declare(strict_types=1);

namespace ExampleName\librairies\muqsit\invmenu\session\network\handler;

use Closure;
use ExampleName\librairies\muqsit\invmenu\session\network\NetworkStackLatencyEntry;

final class ClosurePlayerNetworkHandler implements PlayerNetworkHandler{

	/**
	 * @param Closure(Closure) : \ExampleName\librairies\muqsit\invmenu\session\network\NetworkStackLatencyEntry $creator
	 */
	public function __construct(
		readonly private Closure $creator
	){}

	public function createNetworkStackLatencyEntry(Closure $then) : NetworkStackLatencyEntry{
		return ($this->creator)($then);
	}
}