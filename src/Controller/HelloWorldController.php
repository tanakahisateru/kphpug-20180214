<?php

namespace App\Controller;

use App\Service\HelloWorld;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldController extends Controller
{
    /**
     * @var HelloWorld
     */
    private $helloWorld;

    /**
     * @required
     * @param HelloWorld $helloWorld
     */
    public function setHelloWorld(HelloWorld $helloWorld): void
    {
        $this->helloWorld = $helloWorld;
    }

    /**
     * @Route("/hello/world", name="hello_world")
     * @return Response
     */
    public function getIndex(): Response
    {
        return $this->render('hello-world.html.twig', [
            'title' => $this->helloWorld->greet('World'),
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum.',
        ]);
    }
}
