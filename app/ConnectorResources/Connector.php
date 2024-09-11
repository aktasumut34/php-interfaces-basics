<?php

namespace App\ConnectorResources;

use App\ConnectorResources\Responses\Success;
use App\ConnectorResources\Responses\SyncError;

abstract class Connector
{
    abstract function sync(): SyncError|Success;
}
