<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog['title'] ?? 'Blog' }}</title>
</head>
<body>
    <h1>{{ $blog['title'] ?? 'Untitled' }}</h1>
    <p>{{ $blog['content'] ?? '' }}</p>
    <a href="/blogs/edit/{{ $blog['id'] }}">Edit</a>
    <form action="/blogs/delete/{{ $blog['id'] }}" method="POST" style="display:inline;">@method('delete')
        @csrf
        <button type="submit">Delete</button>
    </form>
    <p><a href="/">Back to home</a></p>
</body>
</html>
