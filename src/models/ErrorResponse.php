<?php

declare(strict_types=1);

namespace Fetzi\Flipt\models;

final class ErrorResponse
{
    private string $flagkey;
    private string $namespaceKey;
    private string $reason;

    /**
     * @param array<string, mixed> $data
     */
    public function __construct(array $data)
    {
        $this->flagkey      = $data['flagKey'] ?? '';
        $this->namespaceKey = $data['namespaceKey'] ?? '';
        $this->reason       = $data['reason'] ?? '';
    }

    public function getFlagKey(): string
    {
        return $this->flagkey;
    }

    public function getNamespaceKey(): string
    {
        return $this->namespaceKey;
    }

    public function getReason(): string
    {
        return $this->reason;
    }
}
