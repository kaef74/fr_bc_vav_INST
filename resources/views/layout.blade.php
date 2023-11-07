<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0">
    <meta htttp-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
       <h5 class="my-0 mr-md-auto font-weight-normal">Gick</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="/">Главная</a>
        <a class="p-2 text-white" href="/about">Про нас</a>
      </nav>
      <a class="btn btn-primary" href="/review">Отзывы</a>
    </div>

<div class="container">
    @yield('main_content') 
</div>

<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="px-md-5 col-12 col-md">
          <h5 class="my-0 mr-md-auto font-weight-normal">Gick</h5>
      </div>
      <div class="col-6 col-md">
        <h5>Главная</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="/">Перейти</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Про нас</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="/about">Перейти</a></li>
        </ul>
      </div>
    </div>
  </footer>
   
</body>
</html>