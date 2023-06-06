<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index(){

        $categories = Category::all();
        $tags = Tag::all();
        
        return view('Backend.admin.question.add',compact('categories','tags'));
    }


    public function store(Request $request)
    {
       $question = new Question;
       $question->question_title = $request->question_title;
       $question->question_slug = Str::slug($request->question_slug);
       $question->question_description = $request->question_description;
       $question->category_id = $request->category_id;
       $question->tag_id = $request->tag_id;
       $question->meta_title = $request->meta_title;
       $question->meta_description = $request->meta_description;
       $question->meta_keywords = $request->meta_keywords;
       if($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/question',$filename);
        $question->image =$filename;
       }
       $question->save();
       session()->flash('success', 'quetsion added successfully.');
       return redirect()->back();
    }
}
