<?php

namespace App\Apimoodle;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Apimoodle
{
    public function token(){

        $functionname = 'mod_quiz_process_attempt';

        $response = Http::asForm()->post("http://aprendiendo.jademlearning.com/login/token.php", [
            'service' => "moodle_mobile_app",
            'username' => "admin",
            'password' => 'Admin#123.',
        ]);

        return $response;
    }
}
