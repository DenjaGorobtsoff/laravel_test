@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <nav class="nav flex-column nav-pills">
                    <a class="btn btn-primary" href="{{  route('blog.posts.index') }}">Posts</a>
                    <a class="btn btn-success" href="{{  route('recipe.index') }}">Cook Book</a>
                </nav>
            </div>
            <div class="col-9">
                <form action="{{ route('blog.posts.update' , $item->post_id) }}" method="post">
                    @method('PATCH')
                    @csrf
                    {{--Block for Errors--}}
                    @php
                        /* @var \Illuminate\Support\ViewErrorBag $errors */
                    @endphp
                    @if($errors->any())
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first() }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               name="title" placeholder="Title" value="{{ old('title', $item->title) }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Slug</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               name="slug" placeholder="Slug" value="{{ old('slug', $item->slug) }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               name="content_raw" placeholder="Post Description..." value="{{ old('content_raw', $item->content_raw) }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                            <option value="0"></option>
                            @foreach($categories as $category)
                                @if ($category->category_id == old('category_id', $item->category_id))
                                    <option value="{{ $category->category_id }}" selected>{{ $category->title }}</option>
                                @endif
                                <option value="{{ $category->category_id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  type="checkbox" name="is_published" id="defaultCheck1"  {{ $item->is_published ? 'checked' : '' }}>
                        <label class="form-check-label" for="defaultCheck1">
                            Published
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
