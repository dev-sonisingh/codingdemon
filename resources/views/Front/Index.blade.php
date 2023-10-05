@extends('Front.includes.layouts')

@section('content')
    <div class="section-warp ask-me">
        <div class="container clearfix">
            <div class="box_icon box_warp box_no_border box_no_background" box_border="transparent"
                box_background="transparent" box_color="#FFF">
                <div class="row">
                    <div class="col-md-3">
                        <h2> Coding Demon</h2>
                        <p>We are your go-to hub for all things programming, where we navigate the intricate world of code,
                            and tech solutions. We wants to simplify complex coding and provide
                            you with valuable insights, tutorials, and tips to your coding journey</p>
                        <div class="clearfix"></div>
                        <a class="color button dark_button medium" href="#">About Us</a>
                        <a class="color button dark_button medium" href="#">Join Now</a>
                    </div>
                    <div class="col-md-9">
                        <form class="form-style form-style-2">
                            <p>
                                <textarea rows="4" id="question_title"
                                    onfocus="if(this.value=='Ask any question and you be sure find your answer ?')this.value='';"
                                    onblur="if(this.value=='')this.value='Ask any question and you be sure find your answer ?';">Ask any question and you be sure find your answer ?</textarea>
                                <i class="icon-pencil"></i>
                                <span class="color button small publish-question">Ask Now</span>
                            </p>
                        </form>
                    </div>
                </div><!-- End row -->
            </div><!-- End box_icon -->
        </div><!-- End container -->
    </div><!-- End section-warp -->

    <section class="container main-content">
        <div class="row">
            <div class="col-md-9">

                <div class="tabs-warp question-tab">
                    <ul class="tabs">
                        <li class="tab"><a href="#" class="current">Recent Questions</a></li>
                        <li class="tab"><a href="#">Most Responses</a></li>
                        <li class="tab"><a href="#">Recently Answered</a></li>
                        {{-- <li class="tab"><a href="#">No answers</a></li> --}}
                    </ul>
                    <div class="tab-inner-warp">
                        <div class="tab-inner">
                            @if ($questions->count() > 0)
                                @foreach ($questions as $item)
                                    <article class="question question-type-normal">
                                        <h2>
                                            <a
                                                href="{{ 'questions/' . $item->question_slug }}">{{ $item->question_title }}</a>
                                        </h2>
                                        <a class="question-report" href="#">Report</a>
                                        <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                        <div class="question-author">
                                            <a href="#" original-title="ahmed"
                                                class="question-author-img tooltip-n"><span></span><img alt=""
                                                    src="{{ asset('Frontend_assets/ask-me/images/demo/avatar.png') }}"></a>
                                        </div>
                                        <div class="question-inner">
                                            <div class="question-desc">
                                                {!! $item->question_description !!} </div>
                                            <div class="question-details">
                                                <span class="question-answered question-answered-done"><i
                                                        class="icon-ok"></i>solved</span>
                                                <span class="question-favorite"><i class="icon-star"></i>5</span>
                                            </div>
                                            <span class="question-category"><a href="#"><i
                                                        class="icon-folder-close"></i>


                                                    {{ $item->categories->pluck('category_title')->implode(', ') }}

                                                </a>
                                            </span>
                                            <span class="question-comment"><a href="#"><i class="icon-tag"></i>
                                                    {{ $item->tags->pluck('tag_title')->implode(', ') }}
                                                </a></span>
                                            <span class="question-date"><i
                                                    class="icon-time"></i>{{ $item->created_at->diffForHumans() }}</span>

                                            {{-- 
                                                      @foreach ($product->images as $image)
                                                   <li><img src="{{ asset($image->path) }}" alt="Product Image"></li>
                                                     @endforeach --}}


                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                @endforeach
                            @else
                                <p>No questions found</p>
                            @endif



                            {{-- <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a> --}}
                        </div>
                    </div>
                    <div class="tab-inner-warp">
                        @foreach ($questions as $item)
                            <article class="question question-type-normal">
                                <h2>
                                    <a href="{{ 'questions/' . $item->question_slug }}">{{ $item->question_title }}</a>
                                </h2>
                                <a class="question-report" href="#">Report</a>
                                <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                <div class="question-author">
                                    <a href="#" original-title="ahmed"
                                        class="question-author-img tooltip-n"><span></span><img alt=""
                                            src="{{ asset('Frontend_assets/ask-me/images/demo/avatar.png') }}"></a>
                                </div>
                                <div class="question-inner">
                                    <div class="question-desc">
                                        {!! $item->question_description !!} </div>
                                    <div class="question-details">
                                        <span class="question-answered question-answered-done"><i
                                                class="icon-ok"></i>solved</span>
                                        <span class="question-favorite"><i class="icon-star"></i>5</span>
                                    </div>
                                    <span class="question-category"><a href="#"><i class="icon-folder-close"></i>


                                            {{ $item->categories->pluck('category_title')->implode(', ') }}

                                        </a>
                                    </span>
                                    <span class="question-comment"><a href="#"><i class="icon-tag"></i>
                                            {{ $item->tags->pluck('tag_title')->implode(', ') }}
                                        </a></span>
                                    <span class="question-date"><i
                                            class="icon-time"></i>{{ $item->created_at->diffForHumans() }}</span>

                                    {{-- 
                                                      @foreach ($product->images as $image)
                                                   <li><img src="{{ asset($image->path) }}" alt="Product Image"></li>
                                                     @endforeach --}}


                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="tab-inner-warp">
                        @foreach ($questions as $item)
                            <article class="question question-type-normal">
                                <h2>
                                    <a href="{{ 'questions/' . $item->question_slug }}">{{ $item->question_title }}</a>
                                </h2>
                                <a class="question-report" href="#">Report</a>
                                <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                <div class="question-author">
                                    <a href="#" original-title="ahmed"
                                        class="question-author-img tooltip-n"><span></span><img alt=""
                                            src="{{ asset('Frontend_assets/ask-me/images/demo/avatar.png') }}"></a>
                                </div>
                                <div class="question-inner">
                                    <div class="question-desc">
                                        {!! $item->question_description !!} </div>
                                    <div class="question-details">
                                        <span class="question-answered question-answered-done"><i
                                                class="icon-ok"></i>solved</span>
                                        <span class="question-favorite"><i class="icon-star"></i>5</span>
                                    </div>
                                    <span class="question-category"><a href="#"><i class="icon-folder-close"></i>


                                            {{ $item->categories->pluck('category_title')->implode(', ') }}

                                        </a>
                                    </span>
                                    <span class="question-comment"><a href="#"><i class="icon-tag"></i>
                                            {{ $item->tags->pluck('tag_title')->implode(', ') }}
                                        </a></span>
                                    <span class="question-date"><i
                                            class="icon-time"></i>{{ $item->created_at->diffForHumans() }}</span>

                                    {{-- 
                                          @foreach ($product->images as $image)
                                       <li><img src="{{ asset($image->path) }}" alt="Product Image"></li>
                                         @endforeach --}}


                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        @endforeach
                    </div>

                </div><!-- End page-content -->
            </div><!-- End main -->
            @include('Front.aside')
        </div><!-- End row -->
    </section><!-- End container -->
@endsection
