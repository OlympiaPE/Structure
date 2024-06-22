<?php

namespace ExampleName\managers\types;

use ExampleName\Loader;
use ExampleName\managers\Manager;
use ExampleName\utils\FileUtil;
use pocketmine\command\Command;
use Symfony\Component\Filesystem\Path;

class CommandManager extends Manager
{
    /**
     * @return void
     */
    public function onLoad(): void
    {
        FileUtil::callDirectory(Path::join("commands"), function(string $name): void {
            $command = new $name();
            if ($command instanceof Command) {
                Loader::getInstance()->getServer()->getCommandMap()->register($command->getName(), $command);
            }
        });
    }
}
