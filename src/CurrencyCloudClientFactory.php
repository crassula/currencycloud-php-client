<?php

declare(strict_types=1);

namespace CurrencyCloud;

class CurrencyCloudClientFactory
{
    public function __invoke(string $userId, string $apiKey, bool $demo): CurrencyCloud
    {
        $environment = $demo
            ? Session::ENVIRONMENT_DEMONSTRATION
            : Session::ENVIRONMENT_PRODUCTION;

        $session = new Session($environment, $userId, $apiKey);

        return CurrencyCloud::createDefault($session);
    }
}
