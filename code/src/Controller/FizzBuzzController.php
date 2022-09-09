<?php

namespace App\Controller;

use App\FizzBuzz\FizzBuzzIterator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FizzBuzzController extends AbstractController
{
    /**
     * @Route(path="/fizzbuzz", methods={"GET"})
     *
     */
    public function fizzBuzzAction()
    {
        $result = '';
        foreach (new FizzBuzzIterator(1, 100, array(3 => 'Fizz', 5 => 'Buzz', 15 => 'FizzBuzz')) as $fb) {
            $result .= $fb . '<br/>';
        }

        return new Response($result);
    }
}