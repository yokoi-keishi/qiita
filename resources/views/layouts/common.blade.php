<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qiita風記事投稿サービス</title>
  <!-- css -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }} " type="text/css">
</head>
<body>
  @include('parts.header')
  @yield('content')
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>