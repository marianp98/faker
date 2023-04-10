<?php

namespace App\Controller;

use App\Entity\Statement;
use Faker\Factory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/fakeData', name: 'fakeData', methods: ['POST'])]
    public function fake(): string
    {
        //Exemplu de folosire a aceluiasi set de date random, pt unit-teste
        $faker = Factory::create();
        return $faker->name(); // 'Jess Mraz I';
    }
}