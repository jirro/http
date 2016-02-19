<?php

/*
 * This file is part of the Jirro package.
 *
 * (c) Rendy Eko Prastiyo <rendyekoprastiyo@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jirro\Component\Http\Container\ServiceProvider;

use League\Container\ServiceProvider;
use Jirro\Component\Http\Route;

class HttpServiceProvider extends ServiceProvider
{
    protected $provides = [
        'request',
        'Symfony\Component\HttpFoundation\Request',
        'route',
    ];

    public function register()
    {
        $this->container['request'] = function () {
            return Request::createFromGlobals();
        };

        $this->container['Symfony\Component\HttpFoundation\Request'] = function () {
            return $this->container->get('request');
        };

        $this->container['route'] = function () {
            $route = new Route($this->container);

            return $route;
        };

        $this
            ->container
            ->inflector('Jirro\Component\Http\RouteAwareInterface')
            ->invokeMethod('setRoute', ['route'])
        ;
    }
}
