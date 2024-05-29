<?php

namespace ExampleName\utils;

use ExampleName\librairies\SenseiTarzan\Path\PathScanner;
use ExampleName\Loader;

class FileUtil
{
    /**
     * @param string $directory
     * @param callable $callable
     * @param string|null $filesType
     * @return void
     */
    public static function callDirectory(string $directory, callable $callable, string $filesType = null): void
    {
        $main = explode("\\", Loader::getInstance()->getDescription()->getMain());
        unset($main[array_key_last($main)]);
        $main = implode("/", $main);
        $directory = rtrim(str_replace(DIRECTORY_SEPARATOR, "/", $directory), "/");
        $dir = Loader::getInstance()->getFile() . "src/{$main}/" . $directory;

        foreach (PathScanner::scanDirectory($dir, $filesType ?? ["php"]) as $file) {
            $namespaceDirectory = str_replace("/", "\\", $directory);
            $namespaceMain = str_replace("/", "\\", $main);
            $namespace = $namespaceMain . "\\$namespaceDirectory\\" . basename($file, ".php");
            $callable($namespace);
        }
    }
}