<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
// incluyo las validaciones
use App\Http\Requests\PostRequest;  // controlador para valdacion creado

class PostController extends Controller
{
    public function store(PostRequest $request)
    {
        // helper dd para inspeccionar lo que se recibe mediante $request
        dd($request->all());
        // sin embargo la lógica de validación no debe etar en el controlador
        // se crea un archivo aparte
        // para el ejemplo se creará: php artisan make:request PostRequest
        // Controllers/Request/PostRequest.php (para validaciones)
    }
}
