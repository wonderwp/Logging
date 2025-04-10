<?php

namespace WonderWp\Component\Logging;

interface HasLoggerInterface
{
    public function getLogger(): LoggerInterface;

    public function setLogger(LoggerInterface $logger): static;
}
