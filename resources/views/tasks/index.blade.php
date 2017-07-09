<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Incomplete tasks</h1>
    @foreach ($taskIncomplete as $task => $value)
      <p>Task {{ $value->id }}#: {{ $value->body }}</p>
    @endforeach
    <h1>Complete tasks</h1>
    @foreach ($taskIsComplete as $task => $value)
      <p>Task {{ $value->id }}#: {{ $value->body }}</p>
    @endforeach
  </body>
</html>
