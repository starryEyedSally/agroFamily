<?php
namespace Agrofamily\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function demo()
    {
        return view('demo');
    }
}
