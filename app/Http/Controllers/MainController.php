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
        return view('home');
    }

    public function origin()
    {
        return view('origin');
    }


    public function undestanding()
    {
        return view('undestanding');
    }


    public function analitics()
    {
        return view('analitics');
    }


    public function furry()
    {
        return view('furry');
    }
}