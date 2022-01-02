<header>
    <div class="header-block-wrap">
        <div class="header-nav">
            <ul>
                <li><a href="{{url('/')}}">TOP</a></li>
                <li><a href="{{url('/profile')}}">PROFILE</a></li>
                <li><a href="{{url('/article/list')}}">ARTICLE</a></li>
                <li><a href="{{url('/contact')}}">CONTACT</a></li>
            </ul>
        </div>


        <div class="header-login">
            @if (Auth::check())
            {{-- ログイン済みのとき --}}
            <a href="{{ url('/dashboard') }}">マイページへ</a>
            <a href="{{ url('/chat') }}">チャット画面へ</a>

            @else
            {{-- ログインしていないとき --}}
            <a href="{{ url('/login') }}">ログイン</a>
            @endif

        </div>
    </div>

</header>