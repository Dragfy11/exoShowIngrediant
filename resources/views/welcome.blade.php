<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container mt-5">
         <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">quantité</th>
            <th scope="col">photo</th>
            <th scope="col"> </th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($ingrediants as $ingrediant)
                <tr>
                <th scope="row">{{$ingrediant->id}}</th>
                    <td>{{$ingrediant->nom}}</td>
                    <td>{{$ingrediant->quantite}}</td>
                    <td>{{$ingrediant->photo}}</td>
                    <td><a class="btn btn-primary" href="/ingrediant-show/{{$ingrediant->id}}">show</a></td>
                    <td>
                        <form action="/ingrediant-delete/{{$ingrediant->id}}" method="post">
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td>
                    
                    
                    
                </tr>
            @endforeach
            
          
        </tbody>
      </table> 
      </div>
      @include('create')


    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>