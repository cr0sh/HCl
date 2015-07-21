<?php

namespace hcl;

use pocketmine\plugin\PluginBase;

class HCl extends PluginBase {

	private $socket;

	public function onEnable() {
		$this->socket = new Socket($this);
	}

}
