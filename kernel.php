<?php

use Morki\BounceBundle\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle,
            new Symfony\Bundle\TwigBundle\TwigBundle,
            new Symfony\Bundle\MonologBundle\MonologBundle,
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle,
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle,
            new Morki\BounceBundle\MorkiBounceBundle,
        );

        if (in_array($this->getEnvironment(), array('dev', 'test')))
        {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle;
        }

        return $bundles;
    }
}
