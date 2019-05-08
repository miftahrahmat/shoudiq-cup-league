@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Pertandingan Mendatang</h1>

                <table class="table table-hover">
                    <tr>
                        <th>Start</th>
                        <th>Teams</th>
                    </tr>
                    @forelse($games as $game)
                        <tr>
                            <td>{{ $game->start_time }}</td>
                            <td>{{ $game->team1->name }} Vs {{ $game->team2->name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No games.</td>
                        </tr>
                    @endforelse
                </table>

                <hr />

                <h1>Hasil Akhir</h1>

                <table class="table table-hover">
                    <tr>
                        <th>Tanggal</th>
                        <th>Teams</th>
                        <th>Score</th>
                    </tr>
                    @forelse($results as $game)
                        <tr>
                            <td>{{ $game->start_time }}</td>
                            @if ($game->result1 > $game->result2)
                            <td><mark style="font-family: algerian; color:red">Win</mark> {{ $game->team1->name }} Vs {{ $game->team2->name }}</td>
                            @elseif ($game->result1 < $game->result2)
                            <td>{{ $game->team1->name }} Vs {{ $game->team2->name }} <mark style="font-family: algerian; color:red">Win</mark></td>
                            @else
                            <td>{{ $game->team1->name }} Vs {{ $game->team2->name }}</td>
                            @endif
                            <td>{{ $game->result1 }} : {{ $game->result2 }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No results.</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
