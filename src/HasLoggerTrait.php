<?php

namespace WonderWp\Component\Logging;

trait HasLoggerTrait
{
    protected LoggerInterface $logger;

    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    public function setLogger(LoggerInterface $logger): static
    {
        $this->logger = $logger;

        return $this;
    }
}
