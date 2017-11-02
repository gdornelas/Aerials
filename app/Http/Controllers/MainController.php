<?php
/**
 * Created by PhpStorm.
 * User: Gustavo
 * Date: 02/11/2017
 * Time: 16:40
 */

namespace App\Http\Controllers;

class MainController extends Controller
{

    public function homepage()
    {
        return view('main');
    }
}