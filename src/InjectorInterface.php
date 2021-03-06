<?php
/**
 * This file is part of the Ray package.
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace Ray\Di;

interface InjectorInterface
{
    /**
     * Return instance by interface + name (interface namespace)
     *
     * @param string $interface
     * @param string $name
     *
     * @return mixed
     */
    public function getInstance($interface, $name = Name::ANY);
}
