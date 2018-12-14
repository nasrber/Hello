<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 13/12/2018
 * Time: 10:50
 */

namespace HelloTestBundle\Controller;




//use HelloTestBundle\Services\HelloTestManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Container\ContainerInterface;

class HelloTestController extends AbstractController
{
    public function helloTestAction(){
        return new Response($this->container->get('test.hello.manager')->sendMessage());
    }

    public function addMessageAction(){
        $message =  $this->container->get('test.hello.manager')->addMessage('Salut tou le monde', 'Nas');

        return $this->render('@HelloTest/message_view.html.twig', ['message' => $message]);
    }

}