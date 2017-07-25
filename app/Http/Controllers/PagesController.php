<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     // Viewing the services pages is only allowed for users
    //     $this->middleware('auth', ['except' => ['about', 'index']]);
    // }

    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $services = [
            'Back-end development', 
            'Database management', 
            'SEO',
            'Server deployment',
            'Security'];
        return view('pages.services')->with('services', $services);
    }
}
