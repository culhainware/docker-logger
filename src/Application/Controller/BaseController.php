<?php

namespace DockerLogger\Controller;

use Illuminate\Database\Capsule\Manager;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Base Controller
 */
class BaseController
{

    /**
     * @var LoggerInterface
     */
    protected LoggerInterface $logger;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->logger = $this->getApplication()->getLogger();
    }


}
