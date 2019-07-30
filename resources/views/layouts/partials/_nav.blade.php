<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{set_active_route('home')}}">
          <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{set_active_route('about')}}">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">Artisans</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="planet-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
          <div class="dropdown-menu" aria-labelledby="planet-dropdown">
            <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
            <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
            <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
            <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
            <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
            <a class="dropdown-item" href="https://larachat.co">Larachat</a>      
          </div>
        </li>
        <li class="nav-item {{set_active_route('contacts.create')}}">
            <a class="nav-link" href="{{route('contacts.create')}}">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
      </ul>
    </div>
  </div>
</nav>







{{--  <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="{{set_active_route('home')}}"><a href="{{route('home')}}">Home</a></li>
              <li class="{{set_active_route('about')}}"><a href="{{route('about')}}">About</a></li>
              <li><a href="#artsan">Artisan</a></li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="https://laravel.com">Laravel.com</a></li>
                  <li><a href="https://laravel.io">Laravel.io</a></li>
                  <li><a href="https://laracasts.com">Laracasts</a></li>
                  <li><a href="https://larajobs.com">Larajobs</a></li>
                  <li><a href="https://laravel-news.com">Laravel News</a></li>
                  <li><a href="https://larachat.co">Larachat</a></li>
                </ul>
              </li>
              <li class="{{set_active_route('contacts.create')}}"><a href="{{route('contacts.create')}}">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">Login</a></li>
                <li><a href="#artsan">Register</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
</nav>  --}}