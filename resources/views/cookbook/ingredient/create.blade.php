@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
    @auth
        @include('cookbook.layouts.up_menu')
    @endauth
    <div class="col-9">
        <form action="{{ route('ingredients.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">New Ingredient</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="ingredient">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>

@endsection
