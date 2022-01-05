<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel応用テストindex</title>
  <style>
    form{
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }
  </style>
</head>
<body>
  @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
  <form action="/thanks" method ="POST">
    @csrf
    <label for="naem">氏名</label>
    <input type="text" name="name">
    <label for="email">メールアドレス</label>
    <input type="text" name="email">
    <input type="submit" value="送信する">
  </form>
</body>
</html>