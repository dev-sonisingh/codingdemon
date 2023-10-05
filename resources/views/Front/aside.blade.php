<aside class="col-md-3 sidebar">


    <div class="widget widget_social">
        <h3 class="widget_title">Find Us</h3>
        <ul>
            <li class="rss-subscribers">
                <a href="#" target="_blank">
                    <strong>
                        <i class="social_icon-instagram"></i>
                        <span>Follow</span><br>
                        <small>On Instagram</small>
                    </strong>
                </a>
            </li>
            <li class="facebook-fans">
                <a href="#" target="_blank">
                    <strong>
                        <i class="social_icon-facebook"></i>
                        <span>Follow</span><br>
                        <small>On Facebook</small>
                    </strong>
                </a>
            </li>
            <li class="youtube-subs">
                <a href="#" target="_blank">
                    <strong>
                        <i class="social_icon-youtube"></i>
                        <span>Subscribe </span><br>
                        <small>On youtube</small>
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
        <h3 class="widget_title">Categories</h3>
        <ul>
            @foreach ($category as $item)
                <li>

                    {{-- <h6><a href="#">admin</a></h6> --}}
                    <span class="comment"><i class="icon-right-arrow" aria-hidden="true"></i>
                        {{ $item->category_title }}</span>
                </li>
            @endforeach


        </ul>
    </div>

    <div class="widget widget_tag_cloud">
        <h3 class="widget_title">Tags</h3>
        @foreach ($tag as $item)
            <a href="#">{{ $item->tag_title }}</a>
        @endforeach

    </div>



</aside>
