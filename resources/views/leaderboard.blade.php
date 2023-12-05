@extends('master-clean')

@section('title', 'Leaderboard')

@section('head')
  <!-- Include Inter font from Google Fonts CDN -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
@endsection

@section('content')
<div class="container" style="margin-top:150px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Rank</th>
            <th scope="col">Email</th>
            <th scope="col">Username</th>
            <th scope="col">Highest Streak</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td style="background-color: #212529;">name@example.com</td>
            <td style="background-color: #212529;">Otto</td>
            <td style="background-color: #212529;">32</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td style="background-color: #212529;"></td>
            <td style="background-color: #212529;"></td>
            <td style="background-color: #212529;"></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2" style="background-color: #212529;"></td>
            <td style="background-color: #212529;"></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td colspan="2" style="background-color: #212529;"></td>
            <td style="background-color: #212529;"></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td colspan="2" style="background-color: #212529;"></td>
            <td style="background-color: #212529;"></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td colspan="2" style="background-color: #212529;"></td>
            <td style="background-color: #212529;"></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td colspan="2" style="background-color: #212529;"></td>
            <td style="background-color: #212529;"></td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td colspan="2" style="background-color: #212529;"></td>
            <td style="background-color: #212529;"></td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td colspan="2" style="background-color: #212529;"></td>
            <td style="background-color: #212529;"></td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td colspan="2" style="background-color: #212529;"></td>
            <td style="background-color: #212529;"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
