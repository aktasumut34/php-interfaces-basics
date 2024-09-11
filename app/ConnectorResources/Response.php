<?php

namespace App\ConnectorResources;

abstract class Response
{
    protected bool $isError;

    public function isFailed(): bool
    {
        return isset($this->isError) && $this->isError;
    }
    public function isSuccessful(): bool
    {
        return !$this->isFailed();
    }

    abstract public function getMessage(): string;
}
