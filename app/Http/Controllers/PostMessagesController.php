<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostMessagesController extends Controller
{
    public function __invoke(Request $request)
    {
       
        return 'Procesar el formulario';
    }
   
}