<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Todo List</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f3f6f9; padding:20px; }
        .container{ max-width:900px; margin:0 auto; }
        .header{ display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; }
        .card{ background:#fff; padding:15px; border-radius:8px; box-shadow:0 1px 4px rgba(0,0,0,0.06); margin-bottom:12px; }
        .badge{ padding:4px 8px; border-radius:6px; font-size:12px; }
        .badge.pending{ background:#fff3cd; color:#856404; }
        .badge.completed{ background:#d4edda; color:#155724; }
        .actions a{ margin-left:8px; text-decoration:none; color:#0b5ed7; }
        .add-btn{ background:#0b5ed7; color:#fff; padding:8px 12px; border-radius:6px; text-decoration:none; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>My Todo List</h1>
            <a class="add-btn" href="/todos/create">Add Todo</a>
        </div>

        @foreach($todos as $todo)
            <div class="card">
                <div style="display:flex; justify-content:space-between">
                    <div>
                        <h3>{{ $todo->title }}</h3>
                        <p style="margin:6px 0">{{ $todo->description }}</p>
                        <small>Created: {{ $todo->created_at }}</small>
                    </div>
                    <div style="text-align:right">
                        <div class="badge {{ strtolower($todo->status) == 'completed' ? 'completed' : 'pending' }}">{{ $todo->status }}</div>
                        <div class="actions" style="margin-top:10px">
                            <a href="/todos/{{ $todo->id }}">View</a>
                            <a href="/todos/edit/{{ $todo->id }}">Edit</a>
                            <form style="display:inline" method="POST" action="/todos/delete/{{ $todo->id }}">
                                @csrf
                                @method('DELETE')
                                <button style="background:none;border:none;color:#d00;cursor:pointer;padding:0;margin-left:8px">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        @if(count($todos) == 0)
            <p>No todos yet. Click "Add Todo" to create one.</p>
        @endif
    </div>
</body>
</html>
