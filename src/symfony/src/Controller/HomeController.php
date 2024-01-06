<?php

// src/Controller/DefaultController.php
namespace App\Controller;

use App\Message\EmailNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function index(MessageBusInterface $bus): Response
    {
        // will cause the EmailNotificationHandler to be called
        
        for ($i=0; $i < 100000; $i++) {  // only for testing
            $bus->dispatch(new EmailNotification('Look! I created a message!'));
        }
       
        return $this->json(['RabbitMQ' => 'Look! I created a message!']);

    }
}