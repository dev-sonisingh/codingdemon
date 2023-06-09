@extends('Backend.admin.layouts.master')


@push('scripts')
@endpush

@section('content')
    <div class="content">

        <form class="mb-9" action="{{ route('question.update') }}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="row g-3 flex-between-end mb-5">
                <div class="col-auto">
                    <h2 class="mb-2">Edit Question</h2>

                </div>
                <div class="col-auto">

                    <div class="me-2 mb-2 mb-sm-0">
                        @if (session()->has('success'))
                            <div id="myAlert" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session()->has('delete'))
                            <div id="myAlert" class="alert alert-danger">
                                {{ session('delete') }}
                            </div>
                        @endif
                    </div>
                    <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="reset">Discard</button>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Publish Question</button>
                </div>
            </div>
            <h4 class="mb-3">Question Title</h4>
            <div class="row g-5">
                <div class="col-12 col-xl-8">
                    <input class="form-control" type="hidden" name="id" value="{{ $question->id }}" />
                    <input class="form-control " type="text" name="question_title"
                        value="{{ $question->question_title }}" placeholder="Write Question Title here..." /><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://example.com/questions/</span>
                        <input class="form-control" name="question_slug" value="{{ $question->question_slug }}"
                            placeholder="slug" type="text" aria-describedby="basic-addon3" />
                    </div>
                    <div class="mb-6">
                        <h4 class="mb-3"> Short Description</h4>
                        <textarea class="tinymce" id="myTextarea" name="short_description"
                            data-tinymce='{"height":"10rem","placeholder":"Write a short description here..."}'>{{ $question->short_description }}</textarea>
                    </div>
                    <div class="mb-6">
                        <h4 class="mb-3"> Question Description</h4>

                        <textarea class="tinymce" id="myTextarea" name="question_description"
                            data-tinymce='{"height":"15rem","placeholder":"Write a description here..."}'>{{ $question->question_description }}</textarea>
                    </div>



                </div>

                <div class="col-12 col-xl-4">
                    <div class="row g-2">
                        <div class="col-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Organize</h4>
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap justify-content-between mb-2">
                                                    <h5>Meta Title</h5>
                                                </div>
                                                <input type="text" id="meta_title" name="meta_title"
                                                    value="{{ $question->meta_title }}" class="form-control"
                                                    placeholder="Enter Meta Title" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap justify-content-between mb-2">
                                                    <h5>Meta keyword</h5>
                                                </div>
                                                <input type="text" id="meta_keyword" name="meta_keyword"
                                                    value="{{ $question->meta_keywords }}" class="form-control"
                                                    placeholder="Enter keyword separated by commas" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap justify-content-between mb-2">
                                                    <h5>Meta Description</h5>
                                                </div>
                                                <textarea name="meta description" class="form-control" placeholder="Enter Meta Description">{{ $question->meta_description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap justify-content-between mb-2">
                                                    <h5>No index</h5>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="no_index" id="no_index"
                                                        type="checkbox" value="1"
                                                        @if ($question->no_index) checked @endif />
                                                    <label class="form-check-label" for="no_index">Slide for no
                                                        index</label>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap justify-content-between mb-2">
                                                    <h5>Image</h5>
                                                </div>
                                                <img src="{{ asset($question->image ? 'uploads/question/' . $question->image : 'default.png') }}"
                                                    width="40" />

                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap justify-content-between mb-2">
                                                    <h5>Image Title</h5>
                                                </div>
                                                <input type="text" name="image_title" class="form-control"
                                                    placeholder="Image Title">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap justify-content-between mb-2">
                                                    <h5>Image Alt Text</h5>
                                                </div>
                                                <input type="text" name="image_alt_text" class="form-control"
                                                    placeholder="Image Alt Text">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap justify-content-between mb-2">
                                                    <h5>Add More Images</h5>
                                                </div>
                                                @foreach ($images as $image)
                                                    <img src="{{ asset('storage/' . $image->path) }}" alt="Question Image"
                                                        width="100px">
                                                @endforeach
                                                <input type="file" name="images[]" multiple class="form-control"
                                                    id="images">

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap justify-content-between mb-2">
                                                    <h5>Category</h5>
                                                    <a class="fw-bold fs--1" href="{{ route('category.show') }}">Add new
                                                        category</a>
                                                </div>
                                                <select class="form-select mb-3" data-choices="data-choices"
                                                    name="categories[]" multiple
                                                    data-options='{"removeItemButton":true,"placeholder":true}'>
                                                    <option value="">Select categories...</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $question->categories->contains($category->id) ? 'selected' : '' }}>
                                                            {{ $category->category_title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>





                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap justify-content-between mb-2">
                                                    <h5>Tags</h5>
                                                    <a class="fw-bold fs--1" href="{{ route('tag.show') }}">Add new
                                                        tag</a>
                                                </div>
                                                <select class="form-select" data-choices="data-choices" name="tags[]"
                                                    multiple data-options='{"removeItemButton":true,"placeholder":true}'>
                                                    <option value="">Select tags...</option>
                                                    {{-- @foreach ($tags as $tag)
                                                        <option value="{{ $tag->id }}">{{ $tag->tag_title }}
                                                        </option>
                                                    @endforeach --}}
                                                    @foreach ($tags as $tag)
                                                        <option value="{{ $tag->id }}"
                                                            {{ $question->tags->contains($tag->id) ? 'selected' : '' }}>
                                                            {{ $tag->tag_title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
