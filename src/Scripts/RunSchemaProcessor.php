<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use SolutionForest\OocpPhp\Scripts\SchemaToDataclass;
use SolutionForest\OocpPhp\Scripts\SchemaToDatatypes;
use SolutionForest\OocpPhp\Scripts\SchemaToEnum;

echo "Which type should be generated? Select an option: (dataclass/enum/datatype): ";
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
} else {
    echo "Invalid selection.\n";
}
fclose($handle);
