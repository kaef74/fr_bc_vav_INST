@extends('layout')

@section('title')
Главная
@endsection

@section('main_content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Продаю супер крутую программу!</h1>
  <p class="lead">Эта программа перевернёт вашу жизнь!</p>
</div>

<div class="card-deck mb-3 text-center">
    
<div class="card mb-4 shadow-sm">
      <div class="card-header text-dark">
        <h4 class="my-0 font-weight-normal">Бесплатно</h4>
      </div>
      
      <div class="card-body text-dark">
        <h1 class="card-title pricing-card-title">0₽<small class="text-muted">/в месяц</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Программа поможет</li>
          <li>вам, если вы:</li>
          <li>Бомж;</li>
          <li>Без работы.</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Скачать</button>
      </div>
    
</div>
    
<div class="card mb-4 shadow-sm">
      <div class="card-header text-dark">
        <h4 class="my-0 font-weight-normal">Стандартная версия</h4>
      </div>
      
      <div class="card-body text-dark">
        <h1 class="card-title pricing-card-title">100₽<small class="text-muted">/в месяц</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Программа поможет</li>
          <li>вам, если вы:</li>
          <li>Мамкин бизнесмен;</li>
          <li>Начинающий работник.</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Купить</button>
      </div>
    
</div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header text-dark">
        <h4 class="my-0 font-weight-normal">Супер крутая версия</h4>
      </div>
      <div class="card-body text-dark">
        <h1 class="card-title pricing-card-title">1000₽<small class="text-muted">/в месяц</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Программа поможет</li>
          <li>вам, если вы:</li>
          <li>Серьёзный бизнесмен;</li>
          <li>Депутат.</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Купить</button>
      </div>
    </div>
  </div>

  <main role="main" class="container">
  <div class="jumbotron bg-dark">
    <h1>Если возникнут вопросы.</h1>
    <p class="lead">По всем вопросам вы можете обратиться во вкладке "Про нас".</p>
    <a class="btn btn-lg btn-primary" href="/about" role="button">Про нас</a>
  </div>
</main>
@endsection