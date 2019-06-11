@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8">
            <table>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->post_id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
