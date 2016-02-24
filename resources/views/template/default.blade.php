<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF8">
   <title style="color=#00ffcc;">Events</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}"> 
 </head>
  <body>
  @include('template.partials.navbar')
  @include('template.partials.search')
  @include('template.partials.alert')

  <div class="container">
  @yield('content')
  </div>
  </body>
  </html>