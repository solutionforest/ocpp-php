
[![Latest Version on Packagist](https://img.shields.io/packagist/v/solution-forest/ocpp-php.svg?style=flat-square)](https://packagist.org/packages/solution-forest/ocpp-php)
[![Total Downloads](https://img.shields.io/packagist/dt/solution-forest/ocpp-php.svg?style=flat-square)](https://packagist.org/packages/solution-forest/ocpp-php)

# OCPP-PHP

---

A PHP library for implementing the JSON version of the Open Charge Point Protocol (OCPP). This library supports **OCPP 1.6** (errata v4), **OCPP 2.0.1** (Edition 2 FINAL, 2022-12-15, and Edition 3 errata 2024-11) and **OCPP 2.1** (Edition 2 errata 2026-09).

The purpose of this library is to provide the building blocks to construct a **charging station/charge point** and/or **charging station management system (CSMS)/central system**. It is not a complete solution but rather a flexible toolkit for developers to build OCPP-compliant systems.

> **Note:** OCPP 2.0.1 includes fixes for all known issues in OCPP 2.0 and replaces it. Implementers are advised to use OCPP 2.0.1.

## Features

- Full support for OCPP 1.6, OCPP 2.0.1 and OCPP 2.1.
- OCPP 2.1 message types `SEND` (6) and `CALLRESULTERROR` (5), in addition to `CALL`, `CALLRESULT` and `CALLERROR`.
- PHP implementation of essential OCPP components.
- Modular and extensible architecture for building custom solutions.
- WebSocket integration for real-time communication between charging stations and central systems.

## Example

Check the example here : https://github.com/solutionforest/ocpp-php/blob/main/src/Examples/

Pass the version string matching the classes you use: `'v1.6'`, `'v2.0.1'` or `'v2.1'`.

```php
use SolutionForest\OcppPhp\Ocpp\JsonSchemaRegistry;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;

$registry = new JsonSchemaRegistry();
$message = $registry->createFromArray(
    [2, 'boot-1', 'BootNotification', ['reason' => 'PowerUp', 'chargingStation' => ['model' => 'M1', 'vendorName' => 'Acme']]],
    'v2.1'
);

JsonSchemaValidator::validate($message, 'v2.1'); // SolutionForest\OcppPhp\Ocpp\v21\Calls\BootNotification
```

## Generating classes from schemas

The `Calls`, `CallResults`, `Datatypes`, `Enums` and `Interfaces` of each version are generated from the JSON schemas in `src/Ocpp/<version>/Schemas`:

```bash
php src/Scripts/RunSchemaProcessor.php all v21    # or: enum | datatype | dataclass | interface, and v16 | v201
```

## Contribution

Contributions are welcome! If you would like to improve this library or add new features, feel free to fork the repository and submit a pull request. Please ensure your code adheres to PSR standards.

---

## Acknowledgements

This project is inspired by the [OCPP Python library](https://github.com/mobilityhouse/ocpp)

Special thanks to the contributors of the original library and the OCPP community for their valuable work!

---

## License

This library is licensed under the [MIT License](https://github.com/solutionforest/ocpp-php/blob/main/LICENSE).

© 2025 Solution Forest Limited
