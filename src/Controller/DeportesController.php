<?php
/**
 * Created by PhpStorm.
 * User: indi
 * Date: 18/12/2018
 * Time: 20:12
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeportesController
{
    /**
     * @Route("/")
     */
    public function inicio(){
        return new Response('Mi primera página en Symfony usando Annotation Route!');
    }
}