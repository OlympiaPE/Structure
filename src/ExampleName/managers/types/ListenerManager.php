<?php

namespace ExampleName\managers\types;

use ExampleName\libraries\SenseiTarzan\ExtraEvent\Component\EventLoader;
use ExampleName\Loader;
use ExampleName\managers\Manager;
use ExampleName\utils\FileUtil;
use Symfony\Component\Filesystem\Path;

class ListenerManager extends Manager
{
    /**
     * @return void
     */
    public function onLoad(): void
    {
        FileUtil::callDirectory(Path::join("listeners"), fn(string $name) => EventLoader::loadEventWithClass(Loader::getInstance(), $name));
    }
}
