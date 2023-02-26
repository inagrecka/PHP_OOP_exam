<?php

namespace Framework;

use Controller\ElektraCalculateController;
use Controller\ElektraSubmitController;
use Interfaces\RouterProcessInterface;

class ElektraRouter implements RouterProcessInterface {
    /*
     * cia aprasysime tokia logika:
     *  - jei adresas 'page.php' bei duoemnu perdavimo metodas POST:
     *                  - Container pagalba sukuriam 1a ElektraSubmitController klases metoda
     *                  - is ElektraSubmitController iskvieciam submitElektra() metoda
     */
    public function __construct(private Container $container) {}

    public function process(string $path, string $method) {
        if (($path === '/page') && ($method === 'POST')) {
            $controller = $this->container->get(ElektraSubmitController::class);
            $controller->submitElektra();
        }

        if (($path === '/page') && ($method === 'POST')) {
            $controller = $this->container->get(ElektraCalculateController::class);
            $controller->calculateElektra();
        }
    }
}