@extends('layouts.app')
@section('content')
    @auth
        @include('cookbook.layouts.up_menu')
    @endauth
    <div class="container">
    <div class="col-md-8">
        <table>
            @foreach($recipes as $item)
                <tr>
                    <td>{{ $item->ingredient_id }}</td>
                    <td>{{ $item->description }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>

@endsection

