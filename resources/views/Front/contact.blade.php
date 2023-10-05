@extends('Front.includes.layouts')

@section('content')
    <div class="breadcrumbs">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
                <div class="col-md-12">
                    <div class="crumbs">
                        <a href="#">Home</a>
                        <span class="crumbs-span">/</span>
                        <a href="#">Pages</a>
                        <span class="crumbs-span">/</span>
                        <span class="current">Contact Us</span>
                    </div>
                </div>
            </div><!-- End row -->
        </section><!-- End container -->
    </div><!-- End breadcrumbs -->

    <section class="container main-content page-full-width">
        <div class="row">
            <div class="contact-us">

                <div class="col-md-7">
                    <div class="page-content">
                        <h2>Say hello !</h2>
                        <p>Have a question, suggestion, or just want to connect? Feel free to reach out to our team at
                            Coding Demon Solutions. We're here to assist you on your coding journey and welcome your
                            feedback and inquiries. Drop us a message, and we'll get back to you promptly</p>
                        <form class="form-style form-style-3 form-style-5 form-js"
                            action="https://2code.info/demo/html/ask-me-html/contact_us.php" method="post">
                            <div class="form-inputs clearfix">
                                <p>
                                    <label for="name" class="required">Name<span>*</span></label>
                                    <input type="text" class="required-item" value="" name="name" id="name"
                                        aria-required="true">
                                </p>
                                <p>
                                    <label for="mail" class="required">E-Mail<span>*</span></label>
                                    <input type="email" class="required-item" id="mail" name="mail" value=""
                                        aria-required="true">
                                </p>
                                <p>
                                    <label for="url" class="required">Website</label>
                                    <input type="text" id="url" name="url" value="">
                                </p>
                            </div>
                            <div class="form-textarea">
                                <p>
                                    <label for="message" class="required">Message<span>*</span></label>
                                    <textarea id="message" class="required-item" name="message" aria-required="true" cols="58" rows="7"></textarea>
                                </p>
                            </div>
                            <p class="form-submit">
                                <input name="submit" type="submit" value="Send" class="submit button small color">
                            </p>
                        </form>
                    </div><!-- End page-content -->
                </div><!-- End col-md-6 -->
                <div class="col-md-5">
                    <div class="page-content">
                        <h2>About Us</h2>
                        <p>Coding Demon is your trusted resource for coding solutions and programming insights. Our
                            dedicated team of tech enthusiasts is committed to simplifying coding challenges, fostering
                            learning, and empowering programmers of all levels. Join us on this coding adventure and unlock
                            your full potential in the world of technology!"</p>
                        <div class="widget widget_contact">
                            <ul>
                                <li><i class="icon-map-marker"></i>Address : India
                                </li>

                                <li><i class="icon-envelope-alt"></i>E-mail :info@codingdemon.com
                                </li>
                                <li>
                                    <i class="icon-share"></i>Social links :

                                    <a href="https://www.facebook.com/profile.php?id=61551699864599"
                                        original-title="Facebook" class="tooltip-n">
                                        <span class="icon_i">
                                            <span class="icon_square" icon_size="25" span_bg="#3b5997" span_hover="#2f3239">
                                                <i i_color="#FFF" class="social_icon-facebook"></i>
                                            </span>
                                        </span>
                                    </a>

                                    <a original-title="Youtube" class="tooltip-n"
                                        href="https://www.youtube.com/channel/UC83wGg4Rdob7u9Ue4cx3PHQ">
                                        <span class="icon_i">
                                            <span class="icon_square" icon_size="25" span_bg="#cc291f" span_hover="#2f3239">
                                                <i i_color="#FFF" class="social_icon-youtube"></i>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="#" original-title="Linkedin" class="tooltip-n">
                                        <span class="icon_i">
                                            <span class="icon_square" icon_size="25" span_bg="#006599" span_hover="#2f3239">
                                                <i i_color="#FFF" class="social_icon-linkedin"></i>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="https://www.google.com/search?q=coding+demon" original-title="Google plus"
                                        class="tooltip-n">
                                        <span class="icon_i">
                                            <span class="icon_square" icon_size="25" span_bg="#ca2c24" span_hover="#2f3239">
                                                <i i_color="#FFF" class="social_icon-gplus"></i>
                                            </span>
                                        </span>
                                    </a>

                                    <a original-title="Instagram" class="tooltip-n"
                                        href="https://www.instagram.com/codingdemon_">
                                        <span class="icon_i">
                                            <span class="icon_square" icon_size="25" span_bg="#306096"
                                                span_hover="#2f3239">
                                                <i i_color="#FFF" class="social_icon-instagram"></i>
                                            </span>
                                        </span>
                                    </a>



                                </li>
                            </ul>
                        </div>
                    </div><!-- End page-content -->
                </div><!-- End col-md-6 -->
            </div><!-- End contact-us -->
        </div><!-- End row -->
    </section><!-- End container -->
@endsection
