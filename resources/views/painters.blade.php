<!DOCTYPE html>
<html>
<head>
    <title>Painters List</title>
</head>
<body>
    <h1>Painters List</h1>
    <ul>
        @foreach ($painters as $painter)
            <li>{{ $painter->name }}</li>
        @endforeach
    </ul>
</body>
</html>