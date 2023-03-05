<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css">
    <title>管理画面</title>
  </head>
  <body>
    <main class="index-admin-main">
        @if(session('message'))
            <div class="flash">
                {{session('message')}}
            </div>
        @endif
        <div class="top-bar">
            <a href="{{route('admin.index')}}">サイトへ</a>
        </div>
        <div class="container">
            <div class="post-container">
            <h2>実績の投稿</h2>
            <a href="{{route('admin.workCreate')}}" class="new-post">実績の新規追加</a>
            </div>
            <div class="body-container">
                <div class="category-container">
                    <p>タイトル</p>
                    <p>日付</p>
                </div>
                @foreach($works as $work)
                <div class="post-edit-delete-container">
                    <div class="post">
                    <p>{{$work->title}}</p>
                    <p>{{$work->created_at}}</p>
                    </div>
                    <div class="edit-delete">
                    <a href="{{route('admin.workEdit',['id' => $work->id])}}">編集</a>
                    <form method="post" action="{{route('admin.workDelete',['id' => $work->id])}} id="deleteButton"">
                        @csrf
                        @method('DELETE')
                        <button onClick="return confirm('本当に削除しますか？');">削除</button>
                    </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="post-container">
            <h2>自主制作・自分で作った機能の投稿</h2>
            <a href="{{route('admin.productCreate')}}" class="new-post">新規追加</a>
            </div>
            <div class="body-container">
            <div class="category-container">
                <p>タイトル</p>
                <p>日付</p>
            </div>
            @foreach($products as $product)
                <div class="post-edit-delete-container">
                    <div class="post">
                    <p>{{$product->title}}</p>
                    <p>{{$product->created_at}}</p>
                    </div>
                    <div class="edit-delete">
                    <a href="{{route('admin.productEdit',['id' => $product->id])}}">編集</a>
                    <form method="post" action="{{route('admin.productDelete',['id' => $product->id])}} id="deleteButton"">
                        @csrf
                        @method('DELETE')
                        <button onClick="return confirm('本当に削除しますか？');">削除</button>
                    </form>
                    </div>
                </div>
                @endforeach
        </div>
    </main>
  </body>
</html>
