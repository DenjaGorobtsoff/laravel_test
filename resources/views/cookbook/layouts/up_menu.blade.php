<div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                @php
                   // dd($items->getQueueableClass());
                @endphp
                @if(isset($recipes))
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('recipe.create') }}">{{ __('Create New Recipe') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ingredients.index') }}">{{ __('Ingredients') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ingredients.create') }}">{{ __('Create New Ingredient') }}</a>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.posts.create') }}">{{ __('Create New Post') }}</a>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </nav>
</div>
<div class="col-3">
    <nav class="nav flex-column nav-pills">
        <a class="nav-link" href="{{  route('blog.posts.index') }}">Posts</a>
        <a class="nav-link" href="{{  route('recipe.index') }}">Cook Book</a>
    </nav>
</div>

