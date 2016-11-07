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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RoutingController extends Controller
{
    /**
     * Matches /routing exactly
     *
     * @Route("/routing", name="routing_list")
     */
    public function listAction()
    {
        // ...
    }

    /**
     * Matches /routing/*
     *
     * @Route("/routing/{slug}", name="routing_show")
     */
    public function showAction($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /routing/yay-routing, then $slug='yay-routing'

        // ...
    }
}