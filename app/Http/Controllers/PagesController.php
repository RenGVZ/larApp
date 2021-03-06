<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
// use App\Models\User;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to My Laravel Blog';
        // return view('pages.index', compact('title')\);
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'About Me';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}

// class PagesController extends Controller
// {
//     public function index(){
//         return view('pages.index');
//     }
// }
