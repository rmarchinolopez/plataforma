<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function index()
    {
        $docentes = [
            ['id' => 1, 'imagen' => '../../images/avatar01.png', 'nombre' => 'Jorge Luis', 'curso' => 'Big Data', 'hora' => '1330', 'aula' => 'C502', 'en_clase' => true],
            ['id' => 2, 'imagen' => '../../images/avatar01.png', 'nombre' => 'Carlos casas', 'curso' => 'Sistemas', 'hora' => '1450', 'aula' => 'D302', 'en_clase' => false],
            ['id' => 3, 'imagen' => '../../images/avatar01.png', 'nombre' => 'Juan Carlos', 'curso' => 'Business Intelligence', 'hora' => '1250', 'aula' => 'B102', 'en_clase' => true],
            ['id' => 4, 'imagen' => '../../images/avatar02.png', 'nombre' => 'Carmen Carranza', 'curso' => 'Programación I', 'hora' => '1350', 'aula' => 'D105', 'en_clase' => false],
            ['id' => 5, 'imagen' => '../../images/avatar02.png', 'nombre' => 'Arnold Apaza', 'curso' => 'Matemática básica', 'hora' => '1450', 'aula' => 'B108', 'en_clase' => true],
            ['id' => 6, 'imagen' => '../../images/avatar03.png', 'nombre' => 'Franklin Salazar', 'curso' => 'Redes I', 'hora' => '1350', 'aula' => 'D104', 'en_clase' => true],
            ['id' => 7, 'imagen' => '../../images/avatar03.png', 'nombre' => 'Esteban Canarias', 'curso' => 'Cultura Ambiental', 'hora' => '1250', 'aula' => 'H108', 'en_clase' => false],
            ['id' => 8, 'imagen' => '../../images/avatar03.png', 'nombre' => 'Karolina Guzmán', 'curso' => 'Big Data', 'hora' => '1150', 'aula' => 'J108', 'en_clase' => true],

        ];
        return response()->json($docentes);
    }
}
