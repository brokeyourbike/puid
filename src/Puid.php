<?php

/*
 * This file is part of the PUID package.
 *
 * (c) Ivan Stasiuk <brokeyourbike@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Puid;

use Puid\Exception\InvalidPuidStringException;

class Puid
{
    public const ENCODING_CHARS = '0123456789ABCDEFGHJKMNPQRSTVWXYZ';
    public const ENCODING_LENGTH = 32;

    /**
     * @var array
     */
    private static $lastRandChars = [];
}
