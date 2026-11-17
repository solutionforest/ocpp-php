<?php

/**
 * Generate PHP classes from the OCPP JSON schemas.
 *
 * Usage:
 *   php src/Scripts/RunSchemaProcessor.php                      (interactive)
 *   php src/Scripts/RunSchemaProcessor.php <type> <version>
 *
 *   type:    dataclass | enum | datatype | interface | all
 *   version: v16 | v201 | v21
 */

require_once __DIR__ . "/../../vendor/autoload.php";

use SolutionForest\OcppPhp\Scripts\SchemaProcessor;
use SolutionForest\OcppPhp\Scripts\SchemaToDataclass;
use SolutionForest\OcppPhp\Scripts\SchemaToDatatypes;
use SolutionForest\OcppPhp\Scripts\SchemaToEnum;
use SolutionForest\OcppPhp\Scripts\SchemaToInterface;

$generators = [
    'enum' => SchemaToEnum::class,
    'datatype' => SchemaToDatatypes::class,
    'dataclass' => SchemaToDataclass::class,
    'interface' => SchemaToInterface::class,
];

$input = $argv[1] ?? null;
$version = $argv[2] ?? null;

if ($input === null) {
    echo "Which type should be generated? Select an option: (" . implode('/', array_keys($generators)) . "/all): ";
    $input = trim((string) fgets(STDIN));
}

if ($input !== 'all' && !isset($generators[$input])) {
    echo "Invalid selection.\n";
    exit(1);
}

if ($version === null) {
    echo "Select version (" . implode('/', SchemaProcessor::SUPPORTED_VERSIONS) . "): ";
    $version = trim((string) fgets(STDIN));
}

$selected = $input === 'all' ? $generators : [$input => $generators[$input]];

foreach ($selected as $class) {
    /** @var SchemaProcessor $converter */
    $converter = new $class($version);
    $converter->main();
}
