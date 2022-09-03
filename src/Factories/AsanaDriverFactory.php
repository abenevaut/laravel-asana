<?php

namespace abenevaut\Asana\Factories;

use abenevaut\Asana\Contracts\ApiRepositoryAbstract;
use abenevaut\Asana\Contracts\AsanaDriversEnum;

class AsanaDriverFactory
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public function drive(AsanaDriversEnum $driver): ApiRepositoryAbstract
    {
        $class = '\\abenevaut\\Ohdear\\Repositories\\' . $driver->value . 'Repository';

        return new $class();
    }
}
