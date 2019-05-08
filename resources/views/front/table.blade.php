@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Klasemen Sementara</h1>

                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Team</th>
                        <th>Menang</th>
                        <th>Imbang</th>
                        <th>Kalah</th>
                        <th>Main</th>
                        <th>Points</th>
                    </tr>
                    @forelse($teams as $team)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->won }}</td>
                            <td>{{ $team->tied }}</td>
                            <td>{{ $team->lost }}</td>
                            <td>{{ $team->games }}</td>
                            <td>{{ $team->points }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No teams.</td>
                        </tr>
                    @endforelse
                </table>

            </div>
        </div>
    </div>
@endsection
