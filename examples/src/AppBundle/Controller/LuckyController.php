<?php
/**
 * Created by PhpStorm.
 * User: Self
 * Date: 11/7/16
 * Time: 12:48 PM
 */

    // src/AppBundle/Controller/LuckyController.php
    namespace AppBundle\Controller;

    // we use the FrameworkBundle\Controller\Controller in order to use the twig templating language.
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;


    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Component\HttpFoundation\Response;

    class LuckyController
    {
        /**
         * @Route("/lucky/number")
         */
        public function numberAction()
        {
            $number = mt_rand(0, 100);

            return new Response(
                '<html><body>Lucky number: '.$number.'</body></html>'
            );
        }


        /**
         * @Route("/lucky/twig_number")
         */
        public function twig_numberAction()
        {
            $number = mt_rand(0, 100);

            return new Response(
                '<html><body>Lucky number: '.$number.'</body></html>'
            );
        }

    }

/* End of Controller */