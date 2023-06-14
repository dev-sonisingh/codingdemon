@extends('Backend.admin.layouts.master')


@section('content')
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
        </ol>
    </nav>
    <div class="mb-9">
        <div class="row mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Question</h2>
            </div>
            
        </div>
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">All <span
                        class="text-700 fw-semi-bold">(68817)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Published <span
                        class="text-700 fw-semi-bold">(70348)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Drafts <span
                        class="text-700 fw-semi-bold">(17)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">On discount <span
                        class="text-700 fw-semi-bold">(810)</span></a></li>

        </ul>
        <div id="products"
            data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
            <div class="mb-4">
                <div class="row g-3">
                    <div class="col-auto">
                        <div class="search-box">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                    class="form-control search-input search" type="search" placeholder="Search products"
                                    aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                    <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                        <div class="btn-group position-static" role="group">
                            <div class="btn-group position-static text-nowrap"><button
                                    class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button"
                                    data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                    aria-expanded="false" data-bs-reference="parent"> Category<span
                                        class="fas fa-angle-down ms-2"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group position-static text-nowrap"><button
                                    class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button"
                                    data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                    aria-expanded="false" data-bs-reference="parent"> Tags<span
                                        class="fas fa-angle-down ms-2"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">More
                                filters</button>
                        </div>
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
                        <button class="btn btn-link text-900 me-4 px-0"><span
                                class="fa-solid fa-file-export fs--1 me-2"></span>Export</button>
                        <a href="{{ route('question.add') }}" class="btn btn-primary"><span
                                class="fas fa-plus me-2"></span>Add
                            product</a>
                    </div>
                </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table fs--1 mb-0">
                        <thead>
                            <tr>
                                <th class="white-space-nowrap fs--1 align-middle ps-0"
                                    style="max-width:20px; width:18px;">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input"
                                            id="checkbox-bulk-products-select" type="checkbox"
                                            data-bulk-select='{"body":"products-table-body"}' /></div>
                                </th>
                                <th class="sort white-space-nowrap align-middle fs--2" scope="col"
                                    style="width:70px;">
                                </th>
                                <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:350px;"
                                    data-sort="product">TITLE</th>
                                <th class="sort align-middle text-end ps-4" scope="col" data-sort="price"
                                    style="width:150px;">NO -INDEX</th>
                                <th class="sort align-middle ps-4" scope="col" data-sort="category"
                                    style="width:150px;">
                                    CATEGORY</th>
                                <th class="sort align-middle ps-3" scope="col" data-sort="tags" style="width:250px;">
                                    TAGS</th>
                                <th class="sort align-middle fs-0 text-center ps-4" scope="col" style="width:125px;">
                                    STATUS
                                </th>
                                <th class="sort align-middle ps-4" scope="col" data-sort="vendor"
                                    style="width:200px;">KEYWORDS</th>
                                <th class="sort align-middle ps-4" scope="col" data-sort="time" style="width:50px;">
                                    CREATED AT</th>
                                <th class="sort align-middle ps-4" scope="col" data-sort="time" style="width:50px;">
                                    AUTHOR</th>
                                <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="products-table-body">
                            @if ($questions->count()>0)
                            @foreach ($questions as $item)
                            <tr class="position-static">

                                <td class="fs--1 align-middle">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"
                                            data-bulk-select-row='{"product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands...","productImage":"/products/1.png","price":"$39","category":"Plants","tags":["Health","Exercise","Discipline","Lifestyle","Fitness"],"star":false,"vendor":"Blue Olive Plant sellers. Inc","publishedOn":"Nov 12, 10:45 PM"}' />
                                    </div>
                                </td>
                                <td class="align-middle white-space-nowrap py-0">
                                    <div class="border rounded-2">
                                        {{-- <img src="{{ asset($item->image ? 'uploads/category/' . $item->image : 'default.png') }}" alt="" width="50px"> --}}

                                        <img src="{{ asset($item->image ? 'uploads/question/' . $item->image : 'default.png') }}"
                                            alt="" width="53" />
                                    </div>
                                </td>
                                <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0"
                                        href="{{ '/questions/' . $item->question_slug }}">{{ $item->question_title }}</a>
                                </td>
                                <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">
                                    @if ($item->no_index == 0)
                                        index
                                    @else
                                        No Index
                                    @endif
                                </td>
                                <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">

                                    @foreach ($item->categories as $category)
                                        <a class="text-decoration-none" href="#!">
                                            <span class="badge badge-tag me-2 mb-2">
                                                {{ $category->category_title }}</span>
                                        </a>
                                    @endforeach

                                </td>
                                <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;">
                                    @foreach ($item->tags as $tag)
                                        <a class="text-decoration-none" href="#!">
                                            <span class="badge badge-tag me-2 mb-2"> {{ $tag->tag_title }}</span>
                                        </a>
                                    @endforeach

                                </td>
                                <td class="align-middle white-space-nowrap text-end fw-bold text-700 ps-4">
                                    <p>
                                        @if ($item->status == 0)
                                            DRAFT
                                        @else
                                            PUBLISED
                                        @endif
                                    </p>

                                </td>
                                <td class="vendor align-middle text-start fw-semi-bold ps-4"><a
                                        href="#!">{{ $item->meta_keywords }}
                                    </a></td>

                                <td class="time align-middle white-space-nowrap text-600 ps-4">
                                    {{ $item->created_at->diffForHumans() }}</td>
                                <td class="time align-middle white-space-nowrap text-600 ps-4">Coding Demon</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="font-sans-serif btn-reveal-trigger position-static"><button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"
                                            data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h fs--2"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">View</a><a class="dropdown-item"
                                                href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                                href="{{ 'delete-question/' . $item->id }}">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                            @else
                              
                            @endif
                           



                        </tbody>
                    </table>
                </div>
                <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p>
                        <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span
                                class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                            class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span
                                class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                                class="fas fa-chevron-left"></span></button>
                        <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span
                                class="fas fa-chevron-right"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
