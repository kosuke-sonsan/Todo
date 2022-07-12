<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title></title>
</head>
<body>
  <div class="table">
    <div>
  <form action="{{ route('posts.index') }}" method="GET">
    @csrf
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
  </form>
</div>
    <form action="/todo/create" method="post">
    @csrf
      <h3>Todo List</h3>
      @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
        <p>・The content field is required.</p>
        @endforeach
      @endif
        <input type="text" name="content" class="text1">
        <button class="button_1">追加</button><br>
    </form>
    @yield('update')
  </div>
</body>
