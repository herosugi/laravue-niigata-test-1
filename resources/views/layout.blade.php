<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>アプリケーション</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>

<body>

  <div id="app">
    <mypage></mypage>
  </div>

  <script src="{{mix('/js/app.js')}}"></script>
</body>
</html>
