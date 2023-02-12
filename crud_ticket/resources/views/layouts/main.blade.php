<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Quantum Airlines</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg"style="background-color: #384047;">
  <div class="container">
    <a class="navbar-brand text-light" href="/home">Quantum Airlines</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('tickets.index') }}">Reservation</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Hello, {{ auth()->user()->name }} !
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/tickets">Reservation</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
              <button type="submit "class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>
      @endauth

      @guest
        <li class="nav-item">
          <a class="nav-link active" href="/login">Login</a>
        </li>
      @endguest
      </ul>
      
      
    </div>
  </div>
</nav>
    <div class="container mt-4 ms-auto">
        @yield('container')
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>