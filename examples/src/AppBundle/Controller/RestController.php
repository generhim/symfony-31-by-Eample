<?php
/**
 * Created by PhpStorm.
 * User: Self
 * Date: 11/9/16
 * Time: 5:17 PM
 */


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class RestController extends Controller
{

    /**
     * Return a json object.
     *
     * @Route("/rest/") name="whatever"
     */
    public function rest_examplesAction(Request $request)
    {

        if($request->isMethod('POST'))
        {
            $content    = json_decode($request->getContent(),TRUE);
            $response   = array('requestType' => 'POST',    'requestObj' => $request, 'requestContent' => $content);
        }

        if($request->isMethod('GET'))
        {

            if($request->query->get('pie'))
            {
                $content        = array();
                $content['pie'] = $request->query->get('pie');
            }
            else
            {
                $content        = NULL;
            }
            $response       = array('requestType' => 'GET',     'requestObj' => $request, 'requestContent' => $content);
        }

        if($request->isMethod('PUT'))
        {
            $content    = json_decode($request->getContent(),TRUE);
            $response   = array('requestType' => 'PUT',     'requestObj' => $request, 'requestContent' => $content);
        }

        if($request->isMethod('DELETE'))
        {
            $content    = json_decode($request->getContent(),TRUE);
            $response   = array('requestType' => 'DELETE',  'requestObj' => $request, 'requestContent' => $content);
        }


        // In case you want to use the Response class. (Not so necessary.)
        //$response = new Response(json_encode($response));
        //$response->headers->set('Content-Type','application/json');
        //return $response;

        // In case you want to use the JsonResponse class instead. (Preferable)
        return new JsonResponse($response);



    }
}

