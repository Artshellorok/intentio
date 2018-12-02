<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <link href="css/app.css" rel="stylesheet">

  </head>

  <body>
    @include('layouts.header')
    <div class="container">
      <div class="row">
        @yield('content')
        @include('layouts.components.widget')
      </div>

    </div>
    @include('layouts.footer')
    <script src="js/app.js"></script>
  </body>

</html>
