<?php

/*
 * This file is part of the Jirro package.
 *
 * (c) Rendy Eko Prastiyo <rendyekoprastiyo@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jirro\Component\Http\Route\Controller;

use Jirro\Component\View\ViewAwareInterface;
use Jirro\Component\View\ViewAwareTrait;

class StandardController extends AbstractController implements ViewAwareInterface
{
    use ViewAwareTrait;
}
