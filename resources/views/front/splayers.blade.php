@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Profile{{--  {{ $player->name }} --}}</h1>

                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                    </tr>
                  
                    @forelse($players as $player)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $player->name }}</td>
                            <td>{{ $player->birth_day }}</td>
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
