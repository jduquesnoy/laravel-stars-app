<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Star-app</title>
</head>
<body>
  <main>

  </main>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-4">
          <header id="header">
              <h1>STARS BLOG</h1>
          </header>
      </div>
    </div>
      @yield('content')
  </div>

   <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>