<?php

namespace App\Helpers;

class UtilityHelper
{
    public static function learningSpaceIP($requestIP)
    {
        if ($requestIP == "172.16.1.22") {
            return "172.16.1.24";
        } else {
            return "lspace.sil.edu.pe";
        }
    }

    public static function pcIP($server)
    {
        return $server['HTTP_X_FORWARDED_FOR'] ?? null;
    }

    public static function id()
    {
        return rand(1, 999999999999999);
    }

    public static function id1()
    {
        return rand(1, 888888888888888);
    }

    public static function id2()
    {
        return rand(1, 777777777777777);
    }

    public static function id3()
    {
        return rand(1, 666666666666666);
    }

    public static function fechaLarga()
    {
        $dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        $dia = $dias[date('w')];
        $mes = $meses[date('n') - 1];
        return "$dia " . date('j') . " de $mes, " . date('y');
    }

    public static function dmeses($nmes)
    {
        $meses = [
            "01" => "Enero", "02" => "Febrero", "03" => "Marzo", "04" => "Abril",
            "05" => "Mayo", "06" => "Junio", "07" => "Julio", "08" => "Agosto",
            "09" => "Septiembre", "10" => "Octubre", "11" => "Noviembre", "12" => "Diciembre",
            "1" => "Enero", "2" => "Febrero", "3" => "Marzo", "4" => "Abril",
            "5" => "Mayo", "6" => "Junio", "7" => "Julio", "8" => "Agosto",
            "9" => "Septiembre", "10" => "Octubre", "11" => "Noviembre", "12" => "Diciembre"
        ];
        return $meses[$nmes] ?? "Mes desconocido";
    }

    public static function diaSemanaNum()
    {
        $dayOfWeek = date('w');
        return $dayOfWeek == 0 ? 7 : $dayOfWeek;
    }

    public static function diaSemana()
    {
        $dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
        return $dias[date('w')];
    }

    public static function dextensionFile($darchivo)
    {
        return pathinfo($darchivo, PATHINFO_EXTENSION);
    }
}
