<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->withArticles(\App\Article::all());
    }

    public function about()
    {
        //fist method
        /*return view('site/about')->with([
            'first' => 'Hello',
            'last' => 'World',
        ]);*/
        //second method
        $first = 'Hello';
        $last = 'World';
        $third = [
            'who' => 'Laravel',
            'when' => date('Y-m-d'),
        ];
        return view('site/about', compact('first', 'last', 'third'));
        //third method
        /*$data = [];
        $data['first'] = 'Yuri';
        $data['last'] = 'Xu';
        return view('site/about', $data);*/
    }
}
