<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
  /**
   * @Route("/hello/{name}", name="hello")
   */
    public function helloAction($name="BOB")
    {
      if($name == "BOB"){
        return $this->redirectToRoute('homepage');
      }elseif($name == 'Google'){
        return $this->redirect('http://google.com');
      }else{
        return $this->render( 'hello/index.html.twig', array( 'name ' => $name ) );
      }
    }

}
?>
