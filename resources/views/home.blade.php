<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>

    @vite('resources/js/app.js')
  </head>

  <body>
    <div class="container">
      <h1>Movies</h1>
      <div class="row gx-3">
        @foreach ($movies as $movie)
          <div class="col-2 m-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h4 class="card-title">{{ $movie['title'] }}</h4>
                <h4 class="card-title">{{ $movie['original_title'] }}</h4>
                <p class="card-text">{{ $movie['nationality'] }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </body>
</html>
