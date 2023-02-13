<?php
$filePath = __DIR__ . '/../tests/_output/';

//$suite = "unit";
//$writeFileName =  'testdox_' . $suite . '.txt';
//
//require __DIR__ . '/convertXML.php';
//require_once __DIR__ . '/marking.php';

$suite = "acceptance";
$writeFileName =  'testdox_' . $suite . '.txt';

require __DIR__ . '/convertXML.php';
require_once __DIR__ . '/marking.php';