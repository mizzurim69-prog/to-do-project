<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>You are my HOME <?php echo $name; ?></h1>
    <p>This is the home page.</p>
    @foreach ($blogs as $blog)
        <a href="/blogs/{{ $blog['id'] }}"><h2>{{ $blog['title'] }}</h2></a>
        <p>{{ $blog['content'] }}</p>
    @endforeach
</body>
</html>