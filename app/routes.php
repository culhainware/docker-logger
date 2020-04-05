<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use Slim\Views\PhpRenderer;

return function (App $app) {
    // Define named route
    $app->get('/', function ($request, $response, $args) {
        $renderer = new PhpRenderer('templates');
        return $renderer->render($response, "theme.php", $args);
    });


    $app->get('/e', function ($request, $response, $args) {
        $renderer = new PhpRenderer('templates');
        return $renderer->render($response, "theme.php", $args);
    });

    $app->get('/logger', function ($request, $response, $args) {
        $renderer = new PhpRenderer('templates');
        return $renderer->render($response, "theme.php", $args);
    });

    $app->get('/foo', function () {
        echo "Foo!";
    });

    /*$app->group('/logger', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });*/
};
