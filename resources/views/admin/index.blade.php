<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/three@0.140.2/build/three.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r127/three.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.3.2/vivus.js"></script>
        <title>ポートフォリオ</title>
    </head>
    @auth
    <div class="tool-bar">
      <a href="{{route('admin.admin')}}">管理画面</a>
    </div>
    @endauth
    <header class="index-header">
      <div class="loading" id="loading">
        <div class="wrap">
          <svg id="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 471 471">
            <defs>
              <style>
                  .cls-1,.cls-2,.cls-3,.cls-4,.cls-5,.cls-6,.cls-7,.cls-8{fill:none;}
                  .cls-1,.cls-3,.cls-4,.cls-7,.cls-8{stroke:#000;}
                  .cls-1,.cls-3,.cls-4,.cls-5,.cls-6{stroke-linecap:round;}
                  .cls-1,.cls-5,.cls-7{stroke-miterlimit:10;}
                  .cls-1,.cls-4,.cls-5,.cls-6,.cls-7{stroke-width:4px;}
                  .cls-2{opacity:0.4;}
                  .cls-3,.cls-4,.cls-6{stroke-linejoin:round;}
                  .cls-3{stroke-width:3.5px;}
                  .cls-5,.cls-6{stroke:#71b5f5;}
                  .cls-8{stroke-miterlimit:10;stroke-width:4px;}
                  .cls-9{fill:#71b5f5;}
              </style>
            </defs>
            <line class="cls-1" x1="94.42" y1="325" x2="94.42" y2="388"/>
            <rect class="cls-2" x="95.72" y="326.97" width="17.06" height="24.94"/>
            <path class="cls-3" d="M94.42,329.24h9a7.46,7.46,0,0,1,7.46,7.47v5.34a7.18,7.18,0,0,1-7.18,7.18H94.42"/>
            <path d="M235.5,3A232.56,232.56,0,0,1,326,449.73,232.56,232.56,0,0,1,145,21.27,231.09,231.09,0,0,1,235.5,3m0-3C105.44,0,0,105.44,0,235.5S105.44,471,235.5,471,471,365.56,471,235.5,365.56,0,235.5,0Z"/>
            <line class="cls-4" x1="68.78" y1="207" x2="259.78" y2="207"/>
            <line class="cls-4" x1="164.28" y1="292" x2="164.28" y2="161"/>
            <line class="cls-5" x1="138.78" y1="207" x2="249.24" y2="207"/>
            <line class="cls-5" x1="164.28" y1="232.5" x2="164.28" y2="181.5"/>
            <path class="cls-1" d="M134.1,62h68.76a13.92,13.92,0,0,1,13.92,13.92v58.16A13.92,13.92,0,0,1,202.86,148h-1.81"/>
            <path class="cls-1" d="M190.85,148H125.7a13.92,13.92,0,0,1-13.92-13.92V75.92a13.91,13.91,0,0,1,7.87-12.54"/>
            <line class="cls-4" x1="127.78" y1="105.13" x2="200.78" y2="105.13"/>
            <line class="cls-6" x1="182.78" y1="105.13" x2="200.78" y2="105.13"/>
            <path class="cls-5" d="M316.2,205.63H385a13.92,13.92,0,0,1,13.92,13.92v58.16A13.92,13.92,0,0,1,385,291.63h-1.81"/>
            <path class="cls-1" d="M373,291.63H307.81a13.92,13.92,0,0,1-13.92-13.92V219.55A13.91,13.91,0,0,1,301.76,207"/>
            <line class="cls-4" x1="309.89" y1="248.63" x2="382.89" y2="248.63"/>
            <line class="cls-4" x1="346.39" y1="212.13" x2="346.39" y2="285.13"/>
            <line class="cls-6" x1="346.39" y1="267.13" x2="346.39" y2="285.13"/>
            <line class="cls-4" x1="126.57" y1="397" x2="337.57" y2="397"/>
            <line class="cls-1" x1="317.32" y1="325" x2="317.32" y2="379"/>
            <ellipse class="cls-7" cx="138.94" cy="365.94" rx="11.16" ry="13.06"/>
            <ellipse class="cls-8" cx="289.74" cy="365.5" rx="12.82" ry="10.95" transform="translate(-88.72 638.1) rotate(-87.36)"/>
            <ellipse class="cls-8" cx="365.97" cy="365.82" rx="13.16" ry="11.24" transform="translate(-16.32 714.55) rotate(-87.36)"/>
            <line class="cls-1" x1="166.49" y1="342.9" x2="166.49" y2="379.06"/>
            <path class="cls-1" d="M166.49,359.65s0-18.09,20.09-16.75"/>
            <line class="cls-1" x1="335.99" y1="351.88" x2="335.99" y2="379"/>
            <circle class="cls-9" cx="335.99" cy="342.46" r="3.54"/>
            <line class="cls-1" x1="202.78" y1="352.05" x2="258.04" y2="352.05"/>
            <path class="cls-1" d="M246.72,388V347.88c0-5.17,3.67-9.36,8.19-9.36h6.14"/>
            <path class="cls-1" d="M210.1,339.4v29.42a9.86,9.86,0,0,0,9.86,9.86h4.32"/>
            <line class="cls-5" x1="237.4" y1="352.05" x2="258.04" y2="352.05"/>
          </svg>
          <p>ロード中</p>
          <p id="percent">0%</p>
        </div>
      </div>
    </header>
    <body class="index-body">
      <div id="topButton" class="top-button">Top</div>
      <div class="first-view">
        <div class="logo-nav">
          <h1><img src="{{asset('images/logo.png')}}" alt=""></h1>
          <nav>
            <ul>
              <li><a href="#about">About</a></li>
              <li><a href="#work">Work</a></li>
              <li><a href="#product">My Product</a></li>
              <li><a href="#blog">Blog</a></li>
            </ul>
          </nav>
        </div>
        <h2>Kyohei Hayata<br><span>FrontEnd && BackEnd</span></h2>
      </div>

      <!-- Work -->
      <section id="work">
        <div class="work">
          <div class="work-wrap">
            <h2 class="title">Work</h2>
            <div class="title-circle"></div>
          </div>
          <p class="title-sub">コーディング</p>
          <p class="title-explain">実務で作成したサイトの一部を掲載します。画像の上にマウスを乗せるとタイトルが表示されます。</p>
          <div class="items">
            @foreach($works as $work)
            <a href="{{ route('admin.workShow',['work' => $work])}}" class="item">
              <div class="modal">
                <p>{{$work->title}}</p>
              </div>
              <img src="{{ asset('storage/images/'.$work->eyecatch) }}" alt="">
            </a>
            @endforeach
          </div>
          <div class="conscious">
            <h3>コーディングをする時に意識している事</h3>
            <ul>
              <li class="conscious-list">自分もしくは他人があとでサイトを修正する時にやりやすくする為にscssに<span>FLOCSS</span>を使用。ぐちゃぐちゃなscssの書き方をしない。</li>
              <li class="conscious-list">ページの読み込みが遅くならない様にする為に<span>Gulp</span>でcss・jsの圧縮と画像のwebp化をする。</li>
              <li class="conscious-list">セクショニングを意識したコーディングをする。</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- My Product -->
      <section id="product">
        <div class="my-product">
          <div class="my-product-wrap">
            <h2 class="title">Laravel・Vue</h2>
            <div class="title-circle"></div>
          </div>
          <p class="title-sub">自主制作のページや機能・案件</p>
          <p class="title-explain">Vue.jsで作ったページやLaravelの機能・案件です。画像の上にマウスを乗せるとタイトルが表示されます。</p>
          <div class="items">
            @foreach($products as $product)
              <a href="{{ route('admin.productShow',['product' => $product])}}" class="item">
                <div class="modal">
                  <p>{{$product->title}}</p>
                </div>
                <img src="{{ asset('storage/images/'.$product->eyecatch) }}" alt="">
              </a>
            @endforeach
          </div>
        </div>
      </section>

      <!-- About -->
      <section id="about">
        <div class="about">
          <div class="about-wrap">
            <h2 class="title">About</h2>
            <div class="title-circle"></div>
          </div>
          <p class="title-explain">早田恭平（はやたきょうへい）と言います。<br>熊本市出身で大阪市在住です。<br>元大学受験（医学部受験）の予備校講師でしたが少子化の影響で予備校がどんどん潰れて仕事がなくなっているので本職を別の職種にしてWEBの仕事を副業にしています。</p>
        </div>
      </section>

      <!-- Holiday -->
      <section>
        <div class="holiday">
          <div class="holiday-wrap">
            <canvas id="canvas" class="canvas"></canvas>
            <h2 class="title">Holiday</h2>
          </div>
          <p class="title-explain">新しい技術を学ぶのが好きで仕事前・仕事後・休みの日は大体勉強しています。<br>現在はJavaScript・Vue.js・Laravelの勉強をしています。<br>このサイトはLaravel・JavaScriptで作りました。</p>
        </div>
      </section>

      <!-- Blog -->
      <section id="blog">
        <div class="blog">
          <div class="blog-wrap">
            <h2 class="title">Blog</h2>
            <div class="title-circle"></div>
          </div>
          <p class="title-explain">ブログで勉強した内容のアウトプットをしています。プログラミング関係はJavaScript・Vue.js・Laravel等の記事があります。</p>
          <a href="https://newsite-make.com/"><img src="{{asset('images/blog.jpg')}}" alt=""></a>
        </div>
      </section>
      <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
    </body>
    <footer class="index-footer">made by Kyohei Hayata</footer>
</html>
