<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class FrontHomeController extends Controller
{
    public function index()
    {


        // $categories = [1, 2]; // Example category IDs

        // $question = Question::whereHas('categories', function ($query) use ($categories) {
        //     $query->whereIn('category_id', $categories);
        // }, '=', count($categories))->get();

        $question = Question::all();
        return view('Front.index', compact('question'));
    }
}
