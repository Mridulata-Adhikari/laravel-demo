<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $profile = App\Comments::with('comments')->get();
        dd($profile);
        return view('/profile/{username}',compact('profile'));
    }
}
