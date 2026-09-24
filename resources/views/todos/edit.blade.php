<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo</title>
    <style>
        body{ font-family: Arial, sans-serif; background:#f3f6f9; padding:20px }
        .form{ max-width:600px; margin:0 auto; background:#fff; padding:16px; border-radius:8px }
        input, textarea, select{ width:100%; padding:8px; margin-bottom:10px; }
        button{ background:#0b5ed7; color:#fff; padding:8px 12px; border:none; border-radius:6px }
    </style>
</head>
<body>
    <div class="form">
        <h2>Edit Todo</h2>
        <form action="/todos/update/{{ $todo->id }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" placeholder="Title" value="{{ old('title', $todo->title) }}">
            @error('title')<div style="color:red">{{ $message }}</div>@enderror

            <textarea name="description" placeholder="Description">{{ old('description', $todo->description) }}</textarea>
            @error('description')<div style="color:red">{{ $message }}</div>@enderror

            <select name="status">
                <option value="Pending" {{ old('status', $todo->status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Completed" {{ old('status', $todo->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
            </select>
            @error('status')<div style="color:red">{{ $message }}</div>@enderror

            <button type="submit">Update</button>
        </form>
        <p><a href="/todos">Back</a></p>
    </div>
</body>
</html>
