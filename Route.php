<?php

/*
 * This file is part of the Jirro package.
 *
 * (c) Rendy Eko Prastiyo <rendyekoprastiyo@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jirro\Component\Http;

use League\Route\RouteCollection as LeagueRouteCollection;

class Route extends LeagueRouteCollection
{
    const STRATEGY_REQUEST_RESPONSE = 0;

    const STRATEGY_RESTFUL = 1;

    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * {@inheritdoc}
     */
    public function getDispatcher()
    {
        $dispatcher = new Route\Dispatcher($this->container, $this->routes, $this->getData());
        if (! is_null($this->strategy)) {
            $dispatcher->setStrategy($this->strategy);
        }

        return $dispatcher;
    }
}
