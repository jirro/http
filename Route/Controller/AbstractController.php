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

use Jirro\Component\Auth\AuthAwareInterface;
use Jirro\Component\Auth\AuthAwareTrait;
use Jirro\Component\ORM\ObjectManagerAwareInterface;
use Jirro\Component\ORM\ObjectManagerAwareTrait;
use Jirro\Component\Validator\ValidatorAwareInterface;
use Jirro\Component\Validator\ValidatorAwareTrait;

abstract class AbstractController implements
    AuthAwareInterface,
    ObjectManagerAwareInterface,
    ValidatorAwareInterface
{
    use AuthAwareTrait;

    use ObjectManagerAwareTrait;

    use ValidatorAwareTrait;
}
