<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function index()
    {
        $docentes = [
            ['id' => 1, 'imagen' => 'imagen01.jpg', 'nombre' => 'Jorge Luis', 'curso' => 'Big Data', 'hora' => '1330', 'aula' => 'C502', 'en_clase' => true],
            ['id' => 2, 'imagen' => 'imagen02.jpg', 'nombre' => 'Carlos casas', 'curso' => 'Sistemas', 'hora' => '1450', 'aula' => 'D302', 'en_clase' => false],
            ['id' => 3, 'imagen' => 'imagen03.jpg', 'nombre' => 'Juan Carlos', 'curso' => 'Business Intelligence', 'hora' => '1250', 'aula' => 'B102', 'en_clase' => true],
            ['id' => 3, 'imagen' => 'imagen03.jpg', 'nombre' => 'Carmen Carranza', 'curso' => 'Programación I', 'hora' => '1350', 'aula' => 'D105', 'en_clase' => false],
            ['id' => 3, 'imagen' => 'imagen03.jpg', 'nombre' => 'Federico Salazar', 'curso' => 'Matemática básica', 'hora' => '1450', 'aula' => 'B108', 'en_clase' => true],
        ];
        return response()->json($docentes);
    }
}
