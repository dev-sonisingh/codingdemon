<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Query; 
class AskquestionController extends Controller
{
    public function askQuestion()
    {
        $categories = Category::all();
        return view('Front.askquestion', compact('categories'));
    }


    public function SubmitQuestion(Request $request){
        $query = new Query;
        $query->title = $request->title;
        $query->category = $request->category;
        if($request->hasfile('image')){
          $file = $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $filename = time().'.'.$extension;
          $file->move('uploads/query/',$filename);
        }
        $query->description = $request->description;
        $query->description_2 = $request->description_2;

        $query->save();
        session()->flash('success','your Question has submit successfully');
        return redirect()->back();

    }
}
