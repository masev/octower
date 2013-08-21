<?php

/*
 * This file is part of Octower.
 *
 * (c) William Pottier <developer@william-pottier.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octower\Config;

/**
 * Configuration Source Interface
 */
interface ConfigSourceInterface
{
    /**
     * Add a repository
     *
     * @param string $name   Name
     * @param array  $config Configuration
     */
    public function addRepository($name, $config);

    /**
     * Remove a repository
     *
     * @param string $name
     */
    public function removeRepository($name);

    /**
     * Add a config setting
     *
     * @param string $name  Name
     * @param string $value Value
     */
    public function addConfigSetting($name, $value);

    /**
     * Remove a config setting
     *
     * @param string $name
     */
    public function removeConfigSetting($name);

    /**
     * Add a package link
     *
     * @param string $type  Type (require, require-dev, provide, suggest, replace, conflict)
     * @param string $name  Name
     * @param string $value Value
     */
    public function addLink($type, $name, $value);

    /**
     * Remove a package link
     *
     * @param string $type Type (require, require-dev, provide, suggest, replace, conflict)
     * @param string $name Name
     */
    public function removeLink($type, $name);
}