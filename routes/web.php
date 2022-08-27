<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\MemberController;

$router->get('/{name}','MemberController@index');