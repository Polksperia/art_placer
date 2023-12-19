@extends('master-clean')

@section('title', 'ArtPlacer - Leaderboard')

@section('content')

<h1 class="font-weight-bold mb-4 outlined-text-small text-center text-white" style="font-family: 'Squada One', sans-serif; font-size: 8rem;">Leaderboard</h1>
<div class="row">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Highest Streak</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $index => $user)
                    <tr>
                        <th scope="row">{{ $index+1 }}</th>  
                        <td>{{ $users[$index]->username }}</td> 
                        <td>{{ $users[$index]->highest_streak }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
