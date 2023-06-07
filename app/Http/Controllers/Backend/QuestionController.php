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
        $question = new Question;
        $question->question_title = $request->question_title;
        $question->question_slug = Str::slug($request->question_slug);
        $question->question_description = $request->question_description;
        $question->meta_title = $request->meta_title;
        $question->meta_description = $request->meta_description;
        $question->meta_keywords = $request->meta_keywords;
        $question->save();

        $categoryIds = $request->input('categories', []);
        $question->categories()->attach($categoryIds);

        $tagIds = $request->input('tags', []);
        $question->tags()->attach($tagIds);

        $images = $request->file('images');

        foreach ($images as $image) {
            $path = $image->store('question_images');
            $question->images()->create(['path' => $path]);
        }

        session()->flash('success', 'quetsion added successfully.');
        return redirect()->back();
    }
}
