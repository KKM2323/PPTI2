<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestFixture\MockObject;

use PHPUnit\Framework\MockObject\StubApi;

class ClassUsingConfigurableMethods
{
    use StubApi;

    public static function getConfigurableMethods(): array
    {
        return static::$__phpunit_configurableMethods;
    }
}
