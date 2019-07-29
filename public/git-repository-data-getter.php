<?php

namespace GitRepositoryDataGetter;

use GitRepositoryDataGetter\app\GitRepositoryDataManager;
use GitRepositoryDataGetter\app\Parameter;
use GitRepositoryDataGetter\app\Validation;

require_once('../config/config.php');

set_error_handler(
    function ($severity, $message, $file, $line) {
        throw new \ErrorException($message, $severity, $severity, $file, $line);
    }
);

foreach (glob('../app/' . '/*.php') as $class) {
    require_once($class);   
}

$manager = new GitRepositoryDataManager(
    new Parameter($argv),
    new Validation()
);
$manager->processRequest();