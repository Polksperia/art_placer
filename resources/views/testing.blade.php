@extends('master-clean')

@section('title', 'ADMIN VIEW')

@section('content')
<h1>Painters Table</h1>
<div class="table-responsive">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
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
                    <td>{{ $painter->nationality }}</td>
                    <td>{{ $painter->wikipedia }}</td>
                    <td>{{ $painter->image_link }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<h1>User Table</h1>
<div class="table-responsive">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Highest Streak</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->highest_streak }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection