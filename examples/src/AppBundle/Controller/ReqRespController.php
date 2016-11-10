<?php
/**
 * Created by PhpStorm.
 * User: Self
 * Date: 11/9/16
 * Time: 8:02 PM
 *
 *
 * Examples using the Request and Response classes.
 */


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class ReqRespController extends Controller
{

    /**
     * @Route("/reqresp/")
     */
    public function indexAction()
    {
        return new Response('This is the request response example controller. Here we list request and response methods and their outputs.');
    }

}