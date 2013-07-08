<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PantaRei\Bundle\OAuth2Bundle\Tests\Exception;

use PantaRei\OAuth2\Exception\InvalidRequestException;

/**
 * Test invalid request exception.
 *
 * @author Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 */
class InvalidRequestExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \PantaRei\OAuth2\Exception\InvalidRequestException
     */
    public function testInvalidRequestException()
    {
        throw new InvalidRequestException();
    }
}
