@extends('layouts.app')
@section('content')
@auth
    @include('cookbook.layouts.up_menu')
@endauth

    <div class="container">
        <div class="col-md-8">
            <table>
                @foreach($ingredients as $item)
                    <tr>
                        <td>{{ $item->ingredient_id }}</td>
                        <td><a href="{{ route('ingredients.show', $item->ingredient_id) }}">{{ $item->description }}</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
