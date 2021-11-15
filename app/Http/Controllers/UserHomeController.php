<?php

namespace App\Http\Controllers;

use App\Models\TArticle;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{

    public function index()
    {
        $articles = TArticle::all();

        return view('pages.user_home', compact('articles'));
    }
}
