<?php

/**
 * This file is part of eminaker/hello-world
 *
 * To the extent possible under law, Eric Minaker
 * has waived all copyright and related or neighboring rights to
 * eminaker/hello-world.
 *
 * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0 1.0 Universal
 */

declare(strict_types=1);

namespace eminaker\HelloWorld;

/**
 * An example class to act as a starting point for developing your library
 */
class Example
{
    /**
     * Returns a greeting statement using the provided name
     */
    public function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
