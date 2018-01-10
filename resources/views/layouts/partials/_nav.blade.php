<nav class="navbar navbar-expand-md static-top navbar-light bg-light">
        <a class="navbar-brand" href="#">Laracarte</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item  {{ set_active_route('rout_path') }}"" >
              <a class="nav-link" href=" {{ route('rout_path') }} ">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item  {{ set_active_route('about_path') }}">
              <a class="nav-link" href="{{route('about_path')}}">About</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">Artisans</a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                      <a class="dropdown-item" href="http://laravel.com">Laravel.com</a>
                      <a class="dropdown-item" href="http://laravel.io">Laravel.io</a>
                      <a class="dropdown-item" href="http://laracasts.com">Laracasts</a>
                      <a class="dropdown-item" href="http://larajobs.com">Larajobs</a>
                      <a class="dropdown-item" href="http://laravel-news.com">Laravel news</a>
                      <a class="dropdown-item" href="http://larachat.com">Larachat</a>
                      
                    </div>
                  </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            
          </ul>
          <ul class="navbar-nav navbar-right">
             <li><a class="nav-link" href="#">Login</a></li>
             <li><a class="nav-link" href="#">Register</a></li>

          </ul>
        </div>
      </nav>
     