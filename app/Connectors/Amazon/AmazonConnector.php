<?php

namespace App\Connectors\Amazon;

use App\ConnectorResources\Connector;
use App\ConnectorResources\Responses\SyncError;
use App\ConnectorResources\Responses\Success;

class AmazonConnector extends Connector
{
    public function sync(): SyncError|Success
    {
        return new SyncError('Amazon Sync Failed!');
    }
}
