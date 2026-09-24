<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $todo->title }}</title>
    <style>body{ font-family: Arial, sans-serif; background:#f3f6f9; padding:20px } .card{ max-width:700px;margin:0 auto;background:#fff;padding:16px;border-radius:8px }</style>
</head>
<body>
    <div class="card">
        <h2>{{ $todo->title }}</h2>
        <p>{{ $todo->description }}</p>
        <p>Status: <strong>{{ $todo->status }}</strong></p>
        <p>Created: {{ $todo->created_at }}</p>
        <p><a href="/todos">Back to list</a> | <a href="/todos/edit/{{ $todo->id }}">Edit</a></p>
    </div>
</body>
</html>
