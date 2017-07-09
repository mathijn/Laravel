<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Task {{ $task->id }}# </h1>
    <p>{{ $task->body }}</p>
    @if($task->completed = 0)
      <p>Task incomplete</p>
    @else
      <p>Task completed</p>
    @endif
  </body>
</html>
