<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    public function renderViewModel(string $view, $parameters, ?Response $response = null)
    {
        if (!is_array($parameters)) $parameters = get_object_vars($parameters);
        return parent::render($view, $parameters, $response);
    }
}
