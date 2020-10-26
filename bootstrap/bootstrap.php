<?php
    /***
     * This is the root autoload file
     */
    spl_autoload_register(function ($classname) {

        $classPath = ROOT_PATH . "/App/Classes/". $classname . ".class.php";
        $modelPath = ROOT_PATH . "/App/Model/". $classname . ".model.php";
        $configPath = ROOT_PATH . "/App/Config/". $classname . ".config.php";

        if (file_exists($classPath)) {
            include("$classPath");
        } else if (file_exists($modelPath)) {
            include("$modelPath");
        } else if (file_exists($configPath)) {
            include("$configPath");
        } else {
            return  false;
        }

    });
