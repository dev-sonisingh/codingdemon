<div id="header-top">
    <section class="container clearfix">
        <nav class="header-top-nav">
            <ul>
                <li><a href="{{route('contact_us')}}"><i class="icon-envelope"></i>Contact</a></li>
                <li><a href="{{route('contact_us')}}"><i class="icon-headphones"></i>Support</a></li>
                <li><a href="{{ url('sign-in') }}"><i class="icon-user"></i>Login</a></li>
            </ul>
        </nav>
        <div class="header-search">
            <form>
                <input type="text" value="Search here ..." onfocus="if(this.value=='Search here ...')this.value='';"
                    onblur="if(this.value=='')this.value='Search here ...';">
                <button type="submit" class="search-submit"></button>
            </form>
        </div>
    </section><!-- End container -->
</div><!-- End header-top -->
<header id="header">
    <section class="container clearfix">
        <div class="logo"><a href="/"><img alt=""
                    src="{{ asset('Frontend_assets/images/logo.png') }}"></a></div>
        <nav class="navigation">
            <ul>
                <li class="{{ request()->routeIs('home.page') ? 'current_page_item' : '' }}"><a
                        href="{{ route('home.page') }}">Home</a>

                </li>
                <li class="{{ request()->routeIs('ask.question') ? 'current_page_item' : '' }} ask_question"><a
                        href="{{ route('ask.question') }}">Ask Question</a></li>
                <li><a href="javascript:void();">Categories</a>
                    <ul>
                        
                        <li><a href="#">Questions Category</a></li>
                        <li><a href="#">Question Single</a></li>
                        <li><a href="#">Poll Question Single</a></li>
                    </ul>
                </li>
            
                <li><a href="#">Blog</a>
                    <ul>
                        <li><a href="#">Blog 1</a>
                        
                        </li>
                        <li><a href="#">Blog 2</a>
                         
                        </li>
                        <li><a href="#">Post Single</a>
                           
                        </li>
                    </ul>
                </li>
                
                <li><a href="#">Shortcodes</a></li>
                <li class="{{ request()->routeIs('contact_us') ? 'current_page_item' : '' }}"><a  href="{{route('contact_us')}}">Contact Us</a></li>
            </ul>
        </nav>
    </section><!-- End container -->
</header><!-- End header -->
