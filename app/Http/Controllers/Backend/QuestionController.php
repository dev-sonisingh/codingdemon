<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Image;
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
                $path = $image->Store('question_images');
               
                $question->images()->create(['path' => $path]);
            }
        }
        
       
        session()->flash('success', 'quetsion added successfully.');
        return redirect()->back();
    }
    public function edit($id)
    {   
        $question = Question::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();   
        $images = $question->images;

        
        return view('Backend.admin.question.edit', compact('question','categories','tags','images'));
    }


    public function update(Request $request)
    {
        $question = Question::find($request->id);
    
        $question->question_title = $request->question_title;
        
        $question->question_slug = Str::slug($request->question_slug);
        $question->short_description = $request->short_description;
        $question->question_description = $request->question_description;
        $question->meta_title = $request->meta_title;
        $question->meta_description = $request->meta_description;
        $question->meta_keywords = $request->meta_keywords;
        $question->no_index = $request->has('no_index') ? true : false;
        $question->Author = 'CodingDemon';
    
        // if($request->hasfile('image')){
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extension;
        //     $file->move('uploads/question/',$filename);
        //     $question->image = $filename;           
        // }
        if ($request->hasfile('image')) {
            $destination = 'uploads/question/' . $question->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/question/', $filename);
            $question->image = $filename;
        }

        $question->image_title = $request->image_title;
        $question->image_alt_text = $request->image_alt_text;
        $question->update();
    
        $categoryIds = $request->input('categories', []);
        $question->categories()->sync($categoryIds);
    
        $tagIds = $request->input('tags', []);
        $question->tags()->sync($tagIds);
    
        $images = $request->file('images');
    
        if (!empty($request->images)) {
            foreach ($request->images as $image) {
                $path = $image->store('question_images'); // This will store the image and return the path.
    
                $question->images()->create(['path' => $path]);
            }
        }
    
        session()->flash('success', 'Question updated successfully.');
        return redirect()->back();
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