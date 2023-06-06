<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Category;
use App\Models\Tag;


class FrontHomeController extends Controller
{
    public function index(Request $request)
    {

        // $categories = Category::all();
        // $tags = Tag::all();
        $questions = Question::all();
        return view('Front.index', compact('questions'));
    }
}

