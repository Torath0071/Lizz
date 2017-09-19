<?php

namespace AppBundle\Service;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

class HomeViewModel
{
    /** @var EntityManagerInterface $entityManager */
    private $entityManager;
    /** @var ContainerInterface $container */
    private $container;
    /** @var Request $request */
    private $request;

    /**
     * IndexViewModel constructor.
     * @param EntityManagerInterface $entityManager
     * @param ContainerInterface $container
     */
    public function __construct(EntityManagerInterface $entityManager, ContainerInterface $container)
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
        $this->request = $request;
        return $this;
    }
}