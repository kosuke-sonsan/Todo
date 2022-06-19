<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <form action="/todo/create" method="post">
    @csrf
    <h3>Todo List</h3>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
      <p>・The content field is required.</p>
      @endforeach
    @endif
      <input type="text" name="content">
      <button class="button_1">追加</button><br>
      @yield('update')
  </form>
</body>
