@extends('Front.includes.layouts')


@section('content')
    <div class="breadcrumbs">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Ask Question</h1>
                </div>
                <div class="col-md-12">
                    <div class="crumbs">
                        <a href="#">Home</a>
                        <span class="crumbs-span">/</span>
                        <a href="#">Pages</a>
                        <span class="crumbs-span">/</span>
                        <span class="current">Ask Question</span>
                    </div>
                </div>
            </div><!-- End row -->
        </section><!-- End container -->
    </div><!-- End breadcrumbs -->

    <section class="container main-content">
        <div class="row">
            <div class="col-md-9">

                <div class="page-content ask-question">
                    <div class="boxedtitle page-title">
                        <h2>Ask Question</h2>
                    </div>

                    <p>
                        You're ready to ask a website-error-related inquiry and this structure will assist with directing
                        you through the interaction.
                    </p>

                    <div class="form-style form-style-3" id="question-submit">
                        @if (session()->has('success'))
                            <div id="myAlert" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{route('post.question')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-inputs clearfix">
                                <p>
                                    <label class="required">Question Title<span>*</span></label>
                                    <input type="text" name="title" id="question-title">
                                    <span class="form-description">Please choose an appropriate title for the question to
                                        answer it even easier .</span>
                                </p>

                                <p>
                                    <label class="required">Category<span>*</span></label>
                                    <span class="styled-select">
                                        <select name="category">
                                            <option value="">-- select a sategory --</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->category_id }}">{{ $item->category_title }}
                                                </option>
                                            @endforeach



                                        </select>
                                    </span>
                                    <span class="form-description">Please choose the appropriate section so easily search
                                        for your question .</span>
                                </p>

                                <div class="clearfix"></div>


                                <label>Attachment</label>
                                <div class="fileinputs">
                                    <input type="file" name="image" class="file">
                                    <div class="fakefile">
                                        <button type="button" class="button small margin_0">Select file</button>
                                        <span><i class="icon-arrow-up"></i>Browse</span>
                                    </div>
                                </div>

                            </div>
                            <div id="form-textarea">
                                <p>
                                    <label class="required">What are the details of your problem?<span>*</span></label>
                                    <textarea name="description" id="question-details" aria-required="true" cols="58" rows="8"></textarea>
                                    <span class="form-description">Introduce the problem and expand on what you put in the
                                        title. Minimum 20 characters.</span>
                                </p>
                            </div>
                            <div>
                                <p>
                                    <label class="required">What did you try and what were you
                                        expecting?<span>*</span></label>
                                    <textarea name="description_2" id="question-details" aria-required="true" cols="58" rows="8"></textarea>
                                    <span class="form-description">Describe what you tried, what you expected to happen, and
                                        what actually resulted. Minimum 20 characters.</span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <input type="reset" value="Discard Your Question" class="button red-button small">
                            </div>
                            <div class="col-md-6">

                                <input type="submit" id="publish-question" value="Publish Your Question"
                                    class="button green-button small submit">
                            </div>
                        </form>
                    </div>
                </div><!-- End page-content -->
            </div><!-- End main -->
            <aside class="col-md-3 sidebar">
                <div class="widget widget_stats">
                    <h3 class="widget_title">Stats</h3>
                    <div class="ul_list ul_list-icon-ok">
                        <ul>
                            <li><i class="icon-question-sign"></i>Questions ( <span>20</span> )</li>
                            <li><i class="icon-comment"></i>Answers ( <span>50</span> )</li>
                        </ul>
                    </div>
                </div>

                <div class="widget widget_social">
                    <h3 class="widget_title">Find Us</h3>
                    <ul>
                        <li class="rss-subscribers">
                            <a href="#" target="_blank">
                                <strong>
                                    <i class="icon-rss"></i>
                                    <span>Subscribe</span><br>
                                    <small>To RSS Feed</small>
                                </strong>
                            </a>
                        </li>
                        <li class="facebook-fans">
                            <a href="#" target="_blank">
                                <strong>
                                    <i class="social_icon-facebook"></i>
                                    <span>5,000</span><br>
                                    <small>People like it</small>
                                </strong>
                            </a>
                        </li>
                        <li class="twitter-followers">
                            <a href="#" target="_blank">
                                <strong>
                                    <i class="social_icon-twitter"></i>
                                    <span>3,000</span><br>
                                    <small>Followers</small>
                                </strong>
                            </a>
                        </li>
                        <li class="youtube-subs">
                            <a href="#" target="_blank">
                                <strong>
                                    <i class="icon-play"></i>
                                    <span>1,000</span><br>
                                    <small>Subscribers</small>
                                </strong>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="widget widget_login">
                    <h3 class="widget_title">Login</h3>
                    <div class="form-style form-style-2">
                        <form>
                            <div class="form-inputs clearfix">
                                <p class="login-text">
                                    <input type="text" value="Username"
                                        onfocus="if (this.value == 'Username') {this.value = '';}"
                                        onblur="if (this.value == '') {this.value = 'Username';}">
                                    <i class="icon-user"></i>
                                </p>
                                <p class="login-password">
                                    <input type="password" value="Password"
                                        onfocus="if (this.value == 'Password') {this.value = '';}"
                                        onblur="if (this.value == '') {this.value = 'Password';}">
                                    <i class="icon-lock"></i>
                                    <a href="#">Forget</a>
                                </p>
                            </div>
                            <p class="form-submit login-submit">
                                <input type="submit" value="Log in" class="button color small login-submit submit">
                            </p>
                            <div class="rememberme">
                                <label><input type="checkbox" checked="checked"> Remember Me</label>
                            </div>
                        </form>
                        <ul class="login-links login-links-r">
                            <li><a href="#">Register</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="widget widget_highest_points">
                    <h3 class="widget_title">Highest points</h3>
                    <ul>
                        <li>
                            <div class="author-img">
                                <a href="#"><img width="60" height="60"
                                        src="../ask-me/images/demo/admin.jpg" alt=""></a>
                            </div>
                            <h6><a href="#">admin</a></h6>
                            <span class="comment">12 Points</span>
                        </li>
                        <li>
                            <div class="author-img">
                                <a href="#"><img width="60" height="60"
                                        src="../ask-me/images/demo/avatar.png" alt=""></a>
                            </div>
                            <h6><a href="#">vbegy</a></h6>
                            <span class="comment">10 Points</span>
                        </li>
                        <li>
                            <div class="author-img">
                                <a href="#"><img width="60" height="60"
                                        src="../ask-me/images/demo/avatar.png" alt=""></a>
                            </div>
                            <h6><a href="#">ahmed</a></h6>
                            <span class="comment">5 Points</span>
                        </li>
                    </ul>
                </div>

                <div class="widget widget_tag_cloud">
                    <h3 class="widget_title">Tags</h3>
                    <a href="#">projects</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Wordpress</a>
                    <a href="#">Html</a>
                    <a href="#">Css</a>
                    <a href="#">jQuery</a>
                    <a href="#">2code</a>
                    <a href="#">vbegy</a>
                </div>

                <div class="widget">
                    <h3 class="widget_title">Recent Questions</h3>
                    <ul class="related-posts">
                        <li class="related-item">
                            <h3><a href="#">This is my first Question</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="clear"></div><span>Feb 22, 2014</span>
                        </li>
                        <li class="related-item">
                            <h3><a href="#">This Is My Second Poll Question</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="clear"></div><span>Feb 22, 2014</span>
                        </li>
                    </ul>
                </div>

            </aside><!-- End sidebar -->
        </div><!-- End row -->
    </section><!-- End container -->
@endsection
