<?php
/**
 * Created by PhpStorm.
 * User: Self
 * Date: 11/7/16
 * Time: 3:08 PM
 */

// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RoutingController extends Controller
{
    /**
     * Matches /routing exactly
     * i.e. http://localhost/symfony31byExample/examples/web/app_dev.php/routing
     *
     * @Route("/routing", name="routing_list")
     */
    public function listAction()
    {
        // ...
        return new Response('RoutingController->listAction()');
    }


    /**
     * Matches /routing/*
     * i.e. http://localhost/symfony31byExample/examples/web/app_dev.php/routing/123
     *
     * @Route("/routing/{slug}", name="routing_show", requirements={"_format":"json"})
     */
    public function showAction($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /routing/yay-routing, then $slug='yay-routing'

        // ...
        return new Response('RoutingController->showAction() + $slug param: ' . $slug);


    }




}