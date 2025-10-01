<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $featured = [
            'title' => 'Hello and Welcome!',
            'subtitle' => 'My name is John Andre Yap! You can also call me Jay. Welcome to my website!'
        ];
        return view('home', compact('featured'));
    }

    public function about()
    {
        $team = [
            [
                'name' => 'John Andre Yap',
                'role' => 'Project Lead'
            ],
            [
                'name' => 'Mary Sue',
                'role' => 'Designer'
            ],
            [
                'name' => 'John Doe',
                'role' => 'Developer'
            ]
        ];
        return view('about', compact('team'));
    }

    public function hobbies()
    {
        $hobbies = [
            'Reading',
            'Coding',
            'Running',
            'Journaling',
            'Writing',
            'Volunteering'
        ];
        return view('hobbies', compact('hobbies'));
    }
}
