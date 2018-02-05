<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldController extends Controller
{
    /**
     * @Route("/hello/world", name="hello_world")
     */
    public function getIndex()
    {
        return new Response('Welcome to your new controller!');
    }
}
