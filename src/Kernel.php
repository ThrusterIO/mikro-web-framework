<?php

namespace App;

use Symfony\Component\Config\Loader\LoaderInterface;
use Thruster\MikroKernel\MikroKernel;

class Kernel extends MikroKernel
{
    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $projectDir = $this->getProjectDir();

        $loader->load($projectDir . '/config/container.php');
    }
}
