<?php

namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

class UserMiddleware
{
    public function handle(Request $request)
    {
        if (Auth::user()->role !== 0) {
            app()->route->redirect('');
        }
    }
}