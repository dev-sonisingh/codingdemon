<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;


class FrontHomeController extends Controller
{
    public function index(Request $request)
    {

        $questions = Question::with('categories', 'tags', 'images')->get();
 
        return view('Front.index', compact('questions'));
    }

    public function getQuestion($question_slug){

        $question = Question::where('question_slug', $question_slug)->with('categories', 'tags', 'images')->firstOrFail();
       
        return view('Front.single-question',compact('question'));
    }

    public function askQuestion()
    { 
        return view('Front.askquestion');
    }
}

