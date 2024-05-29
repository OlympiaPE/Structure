<?php

namespace ExampleName\managers\types;

use ExampleName\managers\Manager;
use ExampleName\utils\constants\Permissions;
use pocketmine\permission\DefaultPermissions;
use pocketmine\permission\Permission;

class PermissionManager extends Manager
{
    /**
     * @return void
     */
    protected function onLoad(): void
    {
        $reflectionClass = new \ReflectionClass(Permissions::class);
        $constants = $reflectionClass->getConstants();

        $defaultPerm = [\pocketmine\permission\PermissionManager::getInstance()->getPermission(DefaultPermissions::ROOT_OPERATOR)];
        foreach ($constants as $constant => $name) {
            DefaultPermissions::registerPermission(new Permission("olympia.{$name}"), $defaultPerm);
        }
    }
}