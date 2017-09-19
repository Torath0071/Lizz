<?php

namespace AppBundle\Service;


use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

class HomeViewModel
{
    /** @var EntityManager $entityManager */
    private $entityManager;
    /** @var ContainerInterface $container */
    private $container;

    /**
     * IndexViewModel constructor.
     * @param EntityManager $entityManager
     * @param ContainerInterface $container
     */
    public function __construct(EntityManager $entityManager, ContainerInterface $container)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
    }

    /**
     * @param Request $request
     * @return HomeViewModel
     */
    public function assemble(Request $request):HomeViewModel
    {
        $this->base_dir = dirname($this->container->get('kernel')->getRootDir());
        return $this;
    }
}