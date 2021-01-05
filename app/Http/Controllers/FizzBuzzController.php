<?php

namespace App\Http\Controllers;

class FizzBuzzController extends Controller
{
    public function convert (int $num) 
    {
        if ($num % 3 == 0 ) {
            return 'Fizz';
        } else {
            return $num;
        }
    }
}
