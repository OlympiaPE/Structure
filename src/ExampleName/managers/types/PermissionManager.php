<?php

namespace ExampleName\managers\types;

use ExampleName\managers\Manager;
use ExampleName\utils\constants\Permissions;
use pocketmine\permission\DefaultPermissions;
use pocketmine\permission\Permission;
use pocketmine\permission\PermissionManager as PocketminePermissionManager;
use ReflectionClass;

class PermissionManager extends Manager
{
    /**
     * @return void
     */
    public function onLoad(): void
    {
        $permissionsReflectionClass = new ReflectionClass(Permissions::class);
        $permissionManager = PocketminePermissionManager::getInstance();

        foreach ($permissionsReflectionClass->getConstants() as $permissionName) {

            $rootOperator = $permissionManager->getPermission(DefaultPermissions::ROOT_OPERATOR);
            $permission = new Permission($permissionName, "Olympia permission");
            DefaultPermissions::registerPermission($permission, [$rootOperator]);
        }
    }
}
