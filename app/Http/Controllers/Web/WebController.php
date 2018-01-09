<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function view;

class WebController extends Controller
{
    
    /**
     * Load the home view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('www.pages.index');
    }

    public function landing()
    {
        return view('www.pages.landing');
    }
    
}
