<?php

namespace App\ConnectorResources\Responses;

use App\ConnectorResources\Response;

class SyncError extends Response
{
    protected bool $isError = true;
    public function __construct(protected ?string $message = 'Sync error!') {}

    public function getMessage(): string
    {
        return $this->message;
    }
}
