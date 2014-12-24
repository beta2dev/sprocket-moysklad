<?php

// todo DEFFERED extract to test config

define('B2_TEST_RESOURCES', 'C:\arbeit\beta2\fast\framework\src\test\resources');

$GLOBALS['b2foundation'] = 'C:\arbeit\fast2\foundation\src\main\php';
$GLOBALS['b2framework'] = 'C:\arbeit\fast2\framework\src\main\php';
$GLOBALS['b2tmp'] = 'C:\tmp\\';
$GLOBALS['b2config'] = B2_TEST_RESOURCES . '\config';

require_once $GLOBALS['b2framework'] . "/b2/b2.php";
