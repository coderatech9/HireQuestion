<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Nette\Utils\Json;
use Salarmehr\Cosmopolitan\Cosmo;


class ConverterController extends Controller
{
    public function __construct()
    {
    }
    public function show()
    {
        $request = request();
        $langage = $request->input('language');
        $number = $request->input('number');
        $result = Cosmo::create($langage)->spellout($number);
        echo Json::encode($result);
    }
}
