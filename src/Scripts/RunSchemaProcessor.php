<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use SolutionForest\OcppPhp\Scripts\SchemaToDataclass;
use SolutionForest\OcppPhp\Scripts\SchemaToDatatypes;
use SolutionForest\OcppPhp\Scripts\SchemaToEnum;
use SolutionForest\OcppPhp\Scripts\SchemaToInterface;

echo "Which type should be generated? Select an option: (dataclass/enum/datatype/interface): ";
$handle = fopen("php://stdin", "r");
$input = trim(fgets($handle));

if ($input === 'dataclass') {
    $converter = new SchemaToDataclass();
    $converter->main();
} elseif ($input === 'enum') {
    $converter = new SchemaToEnum();
    $converter->main();
} elseif ($input === 'datatype') {
    $converter = new SchemaToDatatypes();
    $converter->main();
} elseif ($input === 'interface') {
    $converter = new SchemaToInterface();
    $converter->main();
} else {
    echo "Invalid selection.\n";
}
fclose($handle);
