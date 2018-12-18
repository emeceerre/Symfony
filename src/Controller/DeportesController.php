<?php
/**
 * Created by PhpStorm.
 * User: indi
 * Date: 18/12/2018
 * Time: 20:12
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class DeportesController
{
    public function inicio(){
        return new Response('Mi primera página en Symfony!');
    }
}