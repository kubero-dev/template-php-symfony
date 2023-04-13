namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomoeController
{
    public function hello(): Response
    {
        return new Response(
            '<html><body>Hello world</body></html>'
        );
    }
}