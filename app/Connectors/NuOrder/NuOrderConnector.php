<?php

namespace App\Connectors\NuOrder;

use App\ConnectorResources\Connector;
use App\ConnectorResources\Responses\SyncError;
use App\ConnectorResources\Responses\Success;

class NuOrderConnector
{
    public function sync(): SyncError|Success
    {
        return new Success();
    }
}
