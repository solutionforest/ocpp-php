<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaRegistry;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;

/**
 * JSON schema "number" properties accept decimals, so they must be typed as float.
 * Typed as int, PHP silently truncates 12.75 to 12 (with a deprecation notice).
 */
final class DecimalNumberTest extends TestCase
{
    public function test_v201_cost_updated_keeps_decimal_total_cost(): void
    {
        $call = new \SolutionForest\OcppPhp\Ocpp\v201\Calls\CostUpdated([
            'totalCost' => 12.75,
            'transactionId' => 'tx-1',
        ]);

        self::assertSame(12.75, $call->totalCost);
        self::assertSame('{"totalCost":12.75,"transactionId":"tx-1"}', json_encode($call->getPayload()));
        self::assertTrue(JsonSchemaValidator::validate($call, 'v2.0.1'));
    }

    public function test_v201_transaction_event_result_keeps_decimal_total_cost_from_wire(): void
    {
        $result = (new JsonSchemaRegistry())->createFromArray(
            [3, 'tx-evt-1', ['totalCost' => 3.4]],
            'v2.0.1',
            'TransactionEvent',
        );

        self::assertSame(3.4, $result->totalCost);
    }

    public function test_v21_cost_updated_keeps_decimal_total_cost(): void
    {
        $call = new \SolutionForest\OcppPhp\Ocpp\v21\Calls\CostUpdated([
            'totalCost' => 12.75,
            'transactionId' => 'tx-1',
        ]);

        self::assertSame(12.75, $call->totalCost);
        self::assertTrue(JsonSchemaValidator::validate($call, 'v2.1'));
    }

    public function test_whole_numbers_are_still_accepted(): void
    {
        $call = new \SolutionForest\OcppPhp\Ocpp\v201\Calls\CostUpdated([
            'totalCost' => 12,
            'transactionId' => 'tx-1',
        ]);

        self::assertEquals(12, $call->totalCost);
        self::assertTrue(JsonSchemaValidator::validate($call, 'v2.0.1'));
    }
}
