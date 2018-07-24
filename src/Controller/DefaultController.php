<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/LIVE", name="index")
     */
    public function index()
    {
        return $this->json([
            'number' => \random_int(1,999),
        ]);
    }
}
