<?php 

namespace Quang\Asm\Controllers\Client;

use Quang\Asm\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'QTQ204';
        
        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}