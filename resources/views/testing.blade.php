<!DOCTYPE html>
<html>
<head>
    <title>TESTING</title>
</head>
<body>
    <h1>Painters Table</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Genre</th>
                <th>Nationality</th>
                <th>Wikipedia</th>
                <th>Image Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($painters as $painter)
                <tr>
                    <td>{{ $painter->id }}</td>
                    <td>{{ $painter->name }}</td>
                    <td>{{ $painter->genre }}</td>
                    <td>{{ $painter->nationality }}</td>
                    <td>{{ $painter->wikipedia }}</td>
                    <td>{{ $painter->image_link }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h1>User Table</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Highest Streak</th>
                <th>Playsets Completed</th>
                <th>Playsets Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->highest_streak }}</td>
                    <td>{{ $user->playsets_completed }}</td>
                    <td>{{ $user->playsets_created }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>