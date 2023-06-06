@extends('Backend.admin.layouts.master')

@section('content')
    <div class="content">
        {{-- <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">admin</a></li>
                <li class="breadcrumb-item"><a href="#!">product</a></li>
                <li class="breadcrumb-item active">tag</li>
            </ol>
        </nav> --}}

        <div class="row">
            <div class="row g-3 flex-between-end ">
                <div class="col-auto">
                    <h2 class="mb-2">Add a Tag</h2>

                </div>
                <div class="col-auto">
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
            </div>

            <div class="col-6 col-xl-6 order-1 order-xl-0">
                <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom border-300 bg-soft">
                        <div class="row g-3 justify-content-between align-items-center">

                            <div class="col-12 col-md">
                                <h4 class="text-900 mb-0">Category form</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-body p-0">

                        <div class="p-4 code-to-copy">
                            <form action="{{route('add.category')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    
                                    <input class="form-control" name="category_title" type="text" placeholder="CATEGORY NAME" />
                                </div>
                                <div class="mb-3">
                                    
                                    <input class="form-control" name="category_slug" type="text" placeholder="CATEGORY SLUG"
                                        required />
                                </div>

                                <button class="btn btn-primary" name="save_category" type="submit">Publish</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-6 order-1 order-xl-0">
                <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
                    <div class="card-header p-4 border-bottom border-300 bg-soft">
                        <div class="row g-3 justify-content-between align-items-center">

                            <div class="col-12 col-md">
                                <h4 class="text-900 mb-0">Category List</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-body p-0">

                        <div class="p-4 code-to-copy">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">slug</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- @foreach ($tags as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->category_title }}</td>
                                            <td>{{ $item->category_slug }}</td>
                                            <td>{{ $item->created_at->format('d/m/y') }}</td>
                                            <td><a href="{{ 'edit-tag/' . $item->id }}"><i class="far fa-edit"></i></a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="{{ 'delete-tag/' . $item->id }}"
                                                    onclick="return confirmDelete();"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
