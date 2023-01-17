<?php

namespace Ethio\Covid19Bundle\Service;

use Psr\Log\LoggerInterface;

class MyService
{
     private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    }
