@extends('Front.includes.layouts')

@section('content')
    <div class="breadcrumbs">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $question->question_title }}</h1>
                </div>
                <div class="col-md-12">
                    <div class="crumbs">
                        <a href="#">Home</a>
                        <span class="crumbs-span">/</span>
                        <a href="#">Questions</a>
                        <span class="crumbs-span">/</span>
                        <span class="current">{{ $question->question_title }}</span>
                    </div>
                </div>
            </div><!-- End row -->
        </section><!-- End container -->
    </div><!-- End breadcrumbs -->

    <section class="container main-content">
        <div class="row">
            <div class="col-md-9">
                <article class="question single-question question-type-normal">
                    <h2>
                        <a href="{{ '/questions/' . $question->question_slug }}">{{ $question->question_title }}</a>
                    </h2>
                    <a class="question-report" href="#">Report</a>
                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>

                    <div class="question-inner">

                        <div class="clearfix"> <img
                                src="{{ asset($question->image ? 'uploads/question/' . $question->image : 'default.png') }}"
                                alt="{{ $question->image_alt_text }}" /></div>
                        <div class="question">
                            {!! $question->question_description !!} </div>
                        <div class="question-details">
                            <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                            <span class="question-favorite"><i class="icon-star"></i>5</span>
                        </div>
                        <span class="question-category"><a href="#"><i class="icon-folder-close"></i>
                                {{ $question->categories->pluck('category_title')->implode(', ') }} </a></span>

                        <span class="question-date">
                            <i class="icon-time"></i>{{ $question->created_at->diffForHumans() }}</span>




                        <div class="clearfix"></div>
                    </div>

                </article>

                <div class="share-tags page-content">
                    <div class="question-tags"><i class="icon-tags"></i>
                        {{ $question->tags->pluck('tag_title')->implode(', ') }}
                    </div>
                    <div class="share-inside-warp">
                        <ul>
                            <li>
                                <a href="#" original-title="Facebook">
                                    <span class="icon_i">
                                        <span class="icon_square" icon_size="20" span_bg="#3b5997" span_hover="#666">
                                            <i i_color="#FFF" class="social_icon-facebook"></i>
                                        </span>
                                    </span>
                                </a>
                                <a href="#" target="_blank">Facebook</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <span class="icon_i">
                                        <span class="icon_square" icon_size="20" span_bg="#00baf0" span_hover="#666">
                                            <i i_color="#FFF" class="social_icon-twitter"></i>
                                        </span>
                                    </span>
                                </a>
                                <a target="_blank" href="#">Twitter</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <span class="icon_i">
                                        <span class="icon_square" icon_size="20" span_bg="#ca2c24" span_hover="#666">
                                            <i i_color="#FFF" class="social_icon-gplus"></i>
                                        </span>
                                    </span>
                                </a>
                                <a href="#" target="_blank">Google plus</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <span class="icon_i">
                                        <span class="icon_square" icon_size="20" span_bg="#e64281" span_hover="#666">
                                            <i i_color="#FFF" class="social_icon-dribbble"></i>
                                        </span>
                                    </span>
                                </a>
                                <a href="#" target="_blank">Dribbble</a>
                            </li>
                            <li>
                                <a target="_blank" href="#">
                                    <span class="icon_i">
                                        <span class="icon_square" icon_size="20" span_bg="#c7151a" span_hover="#666">
                                            <i i_color="#FFF" class="icon-pinterest"></i>
                                        </span>
                                    </span>
                                </a>
                                <a href="#" target="_blank">Pinterest</a>
                            </li>
                        </ul>
                        <span class="share-inside-f-arrow"></span>
                        <span class="share-inside-l-arrow"></span>
                    </div><!-- End share-inside-warp -->
                    <div class="share-inside"><i class="icon-share-alt"></i>Share</div>
                    <div class="clearfix"></div>
                </div><!-- End share-tags -->

                <div class="about-author clearfix">
                    <div class="author-image">
                        <a href="javascript:void(0);" original-title="admin" class="tooltip-n"><img alt=""
                                src="{{ asset('Frontend_assets/logo.png') }}"></a>
                    </div>
                    <div class="author-bio">
                        <h4>About the Author</h4>
                        A seasoned programmer with a passion for demystifying complex coding concepts. With years of
                        experience and a knack for breaking down technical challenges, our author is dedicated to helping
                        fellow programmers navigate the world of code with ease and confidence. Join us on this coding
                        journey led by a true coding enthusiast
                    </div>
                </div><!-- End about-author -->





                <div id="respond" class="comment-respond page-content clearfix">
                    <div class="boxedtitle page-title">
                        <h2>Leave a reply</h2>
                    </div>
                    <form action="#" method="post" id="commentform" class="comment-form">
                        <div id="respond-inputs" class="clearfix">
                            <p>
                                <label class="required" for="comment_name">Name<span>*</span></label>
                                <input name="author" type="text" value="" id="comment_name"
                                    aria-required="true">
                            </p>
                            <p>
                                <label class="required" for="comment_email">E-Mail<span>*</span></label>
                                <input name="email" type="text" value="" id="comment_email"
                                    aria-required="true">
                            </p>
                            <p class="last">
                                <label class="required" for="comment_url">Website<span>*</span></label>
                                <input name="url" type="text" value="" id="comment_url">
                            </p>
                        </div>
                        <div id="respond-textarea">
                            <p>
                                <label class="required" for="comment">Comment<span>*</span></label>
                                <textarea id="comment" name="comment" aria-required="true" cols="58" rows="8"></textarea>
                            </p>
                        </div>
                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" value="Post your answer"
                                class="button small color">
                        </p>
                    </form>
                </div>


            </div><!-- End main -->
            @include('Front.aside')
            <!-- End sidebar -->
        </div><!-- End row -->
    </section><!-- End container -->
@endsection
