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

    // we are now extending the Controller base class to make the twig templating language available.
    // otherwise we will throw an error because $this->render() function will not be identified by the app.
    class LuckyController extends Controller
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

            // this twig template is saved in the {my_app}/app/Resources/views/lucky/ directory...
            return $this->render('lucky/twig_number.html.twig', array(
                    'number' => $number,
                )
            ); // end of $this->render
        }

    }

/* End of Controller */