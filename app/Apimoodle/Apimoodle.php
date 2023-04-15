<?php

namespace App\Apimoodle;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Apimoodle
{
    protected $endpointService = "http://aprendiendo.jademlearning.com/webservice/rest/server.php";

    public function token(){

        $response = Http::asForm()->post("http://aprendiendo.jademlearning.com/login/token.php", [
            'service' => "mood-serv",
            'username' => "admin",
            'password' => 'Admin#123.',
        ]);

        return $response->object();
    }

    public function obtener_categoria_cursos(){
        $wsfunction = "core_course_get_categories";

        $response = Http::asForm()->post($this->endpointService, [
            'wstoken' => $this->token()->token,
            'wsfunction' => $wsfunction,
            'moodlewsrestformat' => 'json',
        ]);

        return $response->object();
    }

    public function crear_categoria_cursos(){
        $wsfunction = "core_course_create_categories";
        $categorias = [];
        $categoria['name'] = "Silicon-Valey";
        $categorias[] = $categoria;

        $response = Http::asForm()->post($this->endpointService, [
            'wstoken' => $this->token()->token,
            'wsfunction' => $wsfunction,
            'moodlewsrestformat' => 'json',
            'categories' => $categorias,
        ]);

        return $response->object();
    }
}
