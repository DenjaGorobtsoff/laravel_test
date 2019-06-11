@extends('layouts.app')
@section('content')
    @auth
        @include('cookbook.layouts.up_menu')
    @endauth
    <div class="container">
        <div class="col-md-8">
            <table>

                    <tr>
                        <td>{{ $ingredient->ingredient_id }}</td>
                        <td>{{ $ingredient->description }}</td>
                    </tr>

            </table>
        </div>
    </div>

@endsection
