<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.j'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid" >
       <div class="col-3">
          <a class="navbar-brand text-warning" href="#"><img src="https://www.repstatic.it/content/contenthub/img/2021/09/19/111425495-529f9e46-66fb-440f-9359-2b3d5f70efb1.png" class="" style="height: 100px"> </a>
        </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse align-self-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-warning " aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-warning" href="{{route('lista')}}">Lista</a>
              </li>

              @auth
                
            
              <li class="nav-item">
                <a class="nav-link active text-warning" href="{{route('form')}}">Form</a>
              </li>
              
              @else

              <li class="nav-item">
                <a class="nav-link disable text-warning" href="">Registrati per inserire utenti</a>
              </li>
              @endauth
       
            </ul>
          </div>

          @auth
          <h2 class="align-self-end text-warning me-3">Ciao {{Auth::user()->name}}</h2>

          <form action="{{route('logout')}}" method="POST">
            @csrf
          <button class="btn btn-warning float-end">Logout</button>
        </form>
        
          @else
          <a type="button" class="btn btn-warning border border-black align-self-end" href="{{route('register')}}" type="button">Registrati</a>
          <a type="button" class="btn btn-warning border border-black align-self-end" href="{{route('login')}}" type="button">Accedi</a>
          @endauth
        </div>
      </nav>
      {{$slot}}
</body>
</html>