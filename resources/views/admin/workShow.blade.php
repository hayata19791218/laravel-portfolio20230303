<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/workShow.css') }}" rel="stylesheet" type="text/css">

    <title>制作実績</title>
  </head>
  <body>
    <main class="show-main">
        <div class="top-bar">
            <a href="{{route('admin.index')}}">サイトへ</a>
            <a href="{{route('admin.workEdit',['id' => $work->id])}}">制作実績の編集</a>
        </div>
        <h1>{{$work->title}}</h1>
        <div class="body">
            {!!$work->body!!}
            <a class="back" href="{{route('admin.index')}}#work">実績掲載ページに戻る</a>
        </div>
    </main>
  </body>
</html>