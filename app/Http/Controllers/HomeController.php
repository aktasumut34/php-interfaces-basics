<?php

namespace App\Http\Controllers;

use App\ConnectorResources\Connector;

class HomeController
{
    private function getConnector($name): Connector
    {
        $connector = "App\Connectors\\{$name}\\{$name}Connector";
        return new $connector;
    }

    public function index()
    {
        $connector = $this->getConnector('Amazon');

        // IDE will autocomplete the method and assign the SyncError|Success return type to $response
        $response = $connector->sync();

        // IDE knows that $response is a SyncError|Success (which means Response) object and will autocomplete the method
        if ($response->isFailed()) {
            echo $response->getMessage();
        }

        /**
         * this will throw a runtime error
         *
         * Class App\Connectors\ModernDropship\ModernDropshipConnector contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (App\ConnectorResources\Connector::sync)
         */
        $connector = $this->getConnector('ModernDropship');

        /**
         * this will throw a runtime error
         *
         * App\Http\Controllers\HomeController::getConnector(): Return value must be of type App\ConnectorResources\Connector, App\Connectors\NuOrder\NuOrderConnector returned
         */
        $connector = $this->getConnector('NuOrder');
    }
}
