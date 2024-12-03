<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Web Application Framework package
 *
 * This is a configuration file for lading FireHub Framework with HTTP kernel.
 * @since 1.0.0
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2025 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package App
 *
 * @version GIT: $Id$ Blob checksum.
 */

//require __DIR__.'/../../Core/src/firehub.FireHub.php';
require 'phar://'.__DIR__.'/../vendor/firehub/core/phar/core.min.phar/initializers/firehub.FireHubConfigurator.php';
require 'phar://'.__DIR__.'/../vendor/firehub/core/phar/core.min.phar/initializers/firehub.Kernel.php';
require 'phar://'.__DIR__.'/../vendor/firehub/core/phar/core.min.phar/kernel/firehub.Http.php';

use FireHub\Core\Initializers\FireHubConfigurator;
use FireHub\Core\Kernel\Http;

/**
 * ### Let there be light
 * @since 1.0.0
 *
 * @return \FireHub\Core\FireHub
 */
return new FireHubConfigurator()
    ->withBootloaders([
        //
    ])
    ->withKernel(Http::class)
    ->create();