<?php

namespace App\Http\Controllers;

use App\Models\TArticle;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{

    public function index()
    {
        $articles = TArticle::orderBy('updated_at', 'ASC')->take(3)->get();

        return view('pages.user_home', compact('articles'));
    }
}
