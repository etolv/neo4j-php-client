<?php

declare(strict_types=1);

/*
 * This file is part of the Neo4j PHP Client and Driver package.
 *
 * (c) Nagels <https://nagels.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Laudis\Neo4j\TestkitBackend\Responses;

use Laudis\Neo4j\TestkitBackend\Contracts\TestkitResponseInterface;

/**
 * Represents a record from a result.
 */
class RecordResponse implements TestkitResponseInterface
{
    /**
     * @var iterable<TestkitResponseInterface>
     */
    private iterable $values;

    /**
     * @param iterable<TestkitResponseInterface> $values
     */
    public function __construct(iterable $values)
    {
        $this->values = $values;
    }

    public function jsonSerialize(): array
    {
        return [
            'name' => 'Record',
            'data' => [
                'values' => $this->values,
            ],
        ];
    }
}
