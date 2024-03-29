@extends('layouts.app')
@section('content')
    @auth
        @include('cookbook.layouts.up_menu')
    @endauth
    <div class="container">
        <div class="col-md-8">
            <table>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->post_id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td><a class="nav-link" href="{{ route('blog.posts.edit', $item->post_id) }}">{{ __('edit') }}</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
