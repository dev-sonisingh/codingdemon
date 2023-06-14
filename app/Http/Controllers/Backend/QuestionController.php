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
    public function index()
    {

        $categories = Category::all();
        $tags = Tag::all();
        return view('Backend.admin.question.add', compact('categories', 'tags'));
    }


    public function store(Request $request)
    {

        $slug = Str::slug($request->question_slug);
        $originalSlug = $slug;
        $counter = 1;

        while (Question::where('question_slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }


        $question = new Question;
        $question->question_title = $request->question_title;
        $question->question_slug = $slug;
        $question->short_description = $request->short_description;
        $question->question_description = $request->question_description;
       
        $question->meta_title = $request->meta_title;
        $question->meta_description = $request->meta_description;
        $question->meta_keywords = $request->meta_keywords;
        $question->no_index = $request->has('no_index') ? true : false;
        $question->Author = 'CodingDemon';
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/question/',$filename);
            $question->image = $filename;            
        }
 
        $question->image_title = $request->image_title;
        $question->image_alt_text = $request->image_alt_text;
        $question->save();

        $categoryIds = $request->input('categories', []);
        $question->categories()->attach($categoryIds);

        $tagIds = $request->input('tags', []);
        $question->tags()->attach($tagIds);

        $images = $request->file('images');
      
        if (!empty($images)) {
            foreach ($images as $image) {
                $path = $image->store('question_images');
                $question->images()->create(['path' => $path]);
            }
        }
        
       
        session()->flash('success', 'quetsion added successfully.');
        return redirect()->back();
    }
    public function edit($id)
    {
        $question = Question::find($id);
        return view('Backend.admin.question.edit', compact('question'));
    }
    public function show(){
     
        $questions = Question::all();
        return view('Backend.admin.question.list',compact('questions'));
    }
    public function destroy($id){
     
        $question = Question::find($id);
        $question->delete();
        session()->flash('delete', 'quetsion removed successfully.');
        return redirect()->back();
    }

}
