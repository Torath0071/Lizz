<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends BaseController
{

    /**
     * @param Request $request
     * @return Response
     *
     * @Route("/", name="homepage")
     */
    public function homeAction(Request $request):Response
    {
        return $this->renderViewModel(
            'Home/index.html.twig',
            $this->get('appbundle.service.homeviewmodel')->assemble($request)
        );
    }
}
