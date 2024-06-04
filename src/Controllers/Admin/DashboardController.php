<?php

namespace Quang\Asm\Controllers\Admin;

use Quang\Asm\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}