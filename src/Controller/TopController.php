<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class TopController
{
    public function index()
    {
       return new Response("hello, world");
    }
}
