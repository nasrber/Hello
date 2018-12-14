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
//    public static function getSubscribedServices(): array
//    {
//        return parent::getSubscribedServices() + [
//                'test.hello.manager'=> HelloTestManager::class
//            ];
//    }

    public function helloTestAction(ContainerInterface $container){
        $message = $container->get('test.hello.manager')->sendMessage();
        return new Response($message);
    }

    public function addMessageAction(ContainerInterface $container){
        $message = $container->get('test.hello.manager')->addMessage('Charge de dire, de transmettre', 'Nas');

        return $this->render('@HelloTest/message_view.html.twig', ['message' => $message]);
    }


}