<?php

namespace App\ConnectorResources\Responses;

use App\ConnectorResources\Response;

class Success extends Response
{
    protected bool $isError = false;
    public function __construct(protected ?string $message = 'Sync was successful!') {}

    public function getMessage(): string
    {
        return $this->message;
    }
}
