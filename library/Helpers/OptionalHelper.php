<?php

/*
 * This file is part of Respect\Validation.
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Helpers;

trait OptionalHelper
{
    public function isOptional($input)
    {
        return in_array($input, ['', null], true);
    }
}