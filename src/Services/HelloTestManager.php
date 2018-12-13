<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 13/12/2018
 * Time: 11:05
 */

namespace HelloTestBundle\Services;


use App\Entity\HelloTestBundle\Message;
use Doctrine\ORM\EntityManager;

class HelloTestManager
{
    /**
     * @var EntityManager
     */
    private $em;

    private $message;

    public function __construct(EntityManager $em, string $message)
    {
        $this->em = $em;
        $this->message = $message;
    }

    public function sendMessage(){
        return $this->message;
    }

    public function addMessage(string $_message, string $_user){
        $message = new Message();

        $message->setMessage($_message);
        $message->setUser($_user);

        $this->em->persist($message);
        $this->em->flush();

        return $message;
    }




}