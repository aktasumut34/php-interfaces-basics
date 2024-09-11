<?php

namespace App\Connectors\Shopify;

use App\ConnectorResources\Connector;
use App\ConnectorResources\Responses\SyncError;
use App\ConnectorResources\Responses\Success;

class ShopifyConnector extends Connector
{
    public function sync(): SyncError|Success
    {
        return new Success('Shopify Sync Successful!');
    }
}
