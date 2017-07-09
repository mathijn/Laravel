<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Welcome</h1>
    <h2>Customers:</h2>
    {{-- {{ print_r($data) }} --}}
    @foreach($data['customers'] as $key => $value)
      <p>{{ $value['first_name'] }}</p>
    @endforeach
  </body>
</html>
