<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function hello(): Response
    {
        return new Response(
            '<html><body>Hello world</body></html>'
        );
    }
}