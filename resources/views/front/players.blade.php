@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>{{ $team->name }} Squad</h1>

                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                    </tr>

                    @forelse($players as $player)
                        <tr>
                            <td><a href="{{ route('players.show',[$player->id]) }}">{{ $player->name . ' ' . $player->surname }}</a></td>
                            <td>{{ $player->birth_date }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No players.</td>
                        </tr>
                    @endforelse
                </table>

            </div>
        </div>
    </div>
@endsection
