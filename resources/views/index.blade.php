<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <form action="/" method="post">
    @csrf
    <h3>Todo List</h3>
      <input type="text" name="task">
      <button class="button_1">追加</button><br>
  </form>
</body>
</html>