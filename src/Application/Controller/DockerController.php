<?php

namespace DockerLogger\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface as RequestInterface;
use Slim\Psr7\Factory\StreamFactory;
use splitbrain\PHPArchive\Archive;
use splitbrain\PHPArchive\Tar;

/**
 * Bundle Controller
 *
 * Handles data/policies
 */
class AgentController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Create a project agent
     */
    public function logger(RequestInterface $pRequest, ResponseInterface $pResponse, array $pParams): ResponseInterface
    {

    }


}
