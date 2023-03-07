<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/workEdit.css') }}" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/src/lang/summernote-ja-JP.js"></script> 
    <title>制作実績の編集</title>
  </head>
  <body>
    <main class="create-main">
      @if($errors->any())
      <ul class="error">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
      @if(session('message'))
        <div class="flash">
            {{session('message')}}
        </div>
      @endif
      <div class="top-bar">
        <a href="{{route('admin.index')}}">サイトへ</a>
      </div>
      <div class="create-container">
        <a href="{{route('admin.admin')}}" class="admin-link"><button>管理画面へ戻る</button></a>
        <h2>制作実績の編集</h2>
        <form action="{{route('admin.workUpdate',['work' => $work])}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <input class="title" name="title" type="text" placeholder="タイトルを追加" value="{{old('title',$work->title)}}">
          <p class="permalink">パーマリンク https://bakkagisaji.com/ <input class="slug" type="text" name="url" placeholder="slugを入力" value="{{old('slug',$work->slug)}}"></p>
          <div class="body-container">
            <div class="summernote">
              <textarea name="body" id="summernote" cols="30" rows="10">{{old('body',$work->body)}}</textarea>
              <button type="submit" class="release-button">更新</button>
            </div>
            <div class="eyecatch">
              <h3>アイキャッチ画像</h3>
              <div class="eyecatch-wrap">
                <input type="file" name="eyecatch" accept="image/jpg,image/png" value="{{old($work->eyecatch)}}">
                <p>アイキャッチ画像を変更</p>
                @if($work->eyecatch)
                <img src="{{asset('storage/images/'.$work->eyecatch)}}" alt="">
                @endif
              </div>
            </div>
          </div>
        </form>
      </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script> 
  </body>
</html>

<!-- summernote -->
<script>
  
  $('#summernote').summernote({
    placeholder: 'ここにテキストを書きます。画像も入れる事ができます。',
    height: 200,
    lang: 'ja-JP',
    
    callbacks: {
      onImageUpload: function(files) {            
        sendFile(files[0]);
        console.log(files[0]);                    
      },
    }
  });
  function sendFile(file) {
    let form_data = new FormData();
    form_data.append('image', file);
  
    $.ajax({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: form_data,      
      type: "POST",
      contentType: 'multipart/form-data',
      url: 'imageUpload',        
      cache: false,        
      contentType: false,    
      processData: false,   
      
    })
    .done(function(url){
      $('#summernote').summernote('insertImage', url);
    })
    .fail(function(XMLHttpRequest, textStatus, errorThrown){
      console.log(XMLHttpRequest.status);
      console.log(textStatus);
      console.log(errorThrown.message);
    })
    .always(function(url){
      console.log('画像を送りました');
    });
  }
</script>