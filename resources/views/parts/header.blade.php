<nav class="navbar navbar-expand-lg navbar-light pl-5 pt-2 pb-2">
  <a href="/" class="navbar-brand text-white">Qiita風</a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="Navbar">
    <ul class="navbar-nav">
      <li class="nav-item ml-2">
        <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdwon" aria-haspopup="true" aria-expanded="false">ホーム</a>
      </li>
      <li class="nav-item ml-2">
        <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdwon" aria-haspopup="true" aria-expanded="false">コミュニティ</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 ml-2">
      <input type="search" name="" id="" class="form-control mr-sm-2" placeholder="キーワードを入力" aria-label="検索...">
    </form>

    <ul class="navbar-nav ml-auto mr-5">
      @if(Auth::check())
      <li class="nav-item ml-2">
        <a href="#" class="nav-link text-white">ストック一覧</a>
      </li>
      <li class="nav-item ml-2">
        <a href="/drafts/new" class="nav-link text-white" id="post-link">投稿する</a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link text-white dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">アイコン</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a href="#" class="dropdown-item">マイページ</a>
          <div class="dropdown-divided"></div>
          <a href="#" class="dropdown-item">下書き一覧</a>
          <a href="#" class="dropdown-item">編集リクエスト</a>
          <div class="dropdown-divided"></div>
          <a href="#" class="dropdown-item">設定</a>
          <a href="#" class="dropdown-item">ヘルプ</a>
          <div class="dropdown-divided"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            ログアウト
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="post" style="display:none;">
            {{ csrf_field() }}
          </form>
        </div>
      </li>
      @else
      <li class="nav-item ml-2">
        <a href="/register" class="nav-link text-white" id="register">ユーザ登録</a>
      </li>
      <li class="nav-item ml-2">
        <a href="#" class="nav-link text-white">ログイン</a>
      </li>
      @endif
    </ul>
  </div><!-- .navbar-collapse -->
</nav>