<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Question; 


class FrontHomeController extends Controller
{
    public function index(Request $request)
    {

      
        $questions = Question::with('categories', 'tags', 'images')->get();
        $tag = Tag::all();
        $category = Category::all();
        return view('Front.index', compact('questions','tag','category'));
    }

    public function getQuestion($question_slug){

        $question = Question::where('question_slug', $question_slug)->with('categories', 'tags', 'images')->firstOrFail();
        $tag = Tag::all();
        $category = Category::all();
        return view('Front.single-question',compact('question','tag','category'));
    }

    public function askQuestion()
    { 
        return view('Front.askquestion');
    }
    public function contactus()
    { 
        return view('Front.contact');
    }
}