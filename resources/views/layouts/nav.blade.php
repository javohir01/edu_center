
<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>

{{--            @if (Auth::check())--}}
{{--                <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>--}}
{{--            @endif--}}
{{--            <div class="flex-center position-ref full-height">--}}
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                @endif
{{--            </div>--}}
        </nav>
    </div>
</div>
