{{-- navigation bar --}}
<nav class="top-nav">
    <label class="menu-hamburger" for="hamburger">
        <input id="hamburger" type="checkbox">
        <div class="line one"></div>
        <div class="line two"></div>
        <div class="line three"></div>
        <div class="hamburger-name">MENU</div>
        <div id="nav-menu">
            <img class="big-bg" src="{{asset('images/common/big-bg1.jpg')}}">
            <div id="menu-container">
                <div id="menu-title">MENU
                </div>

                <ul id="menu-list">
                    <li><a href="{{url('/')}}"><span class="menu-en">TOP</span><span class="menu-ja">ホームに戻る</span></a>
                    </li>
                    <li><a href="#"><span class="menu-en">PROFILE</span><span class="menu-ja">自己紹介ページへ</span></a>
                    </li>
                    <li><a href="{{url('/article/list')}}"><span class="menu-en">ARTICLE</span><span
                                class="menu-ja">記事一覧へ</span></a>
                    </li>
                    <li><a href="#"><span class="menu-en">CONTACT</span><span class="menu-ja">メールやSNSはこちら</span></a>
                    </li>
                </ul>

                <div id="menu-footer">Mao.Koyama.com</div>
            </div>

            <!--Waves Container-->
            <div class="bottomsWave">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="#2c2c2c" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="#352c2c" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="#35332c" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#353335" />
                    </g>
                </svg>
            </div>
            <!--Waves end-->
        </div>
    </label>
</nav>