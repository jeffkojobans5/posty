@extends('layout.welcome')

@section('content')
    <div class="container">
        <div class="col-md-7">
            <form action="{{ route('posts') }}" method="post">
                @csrf
                @error('body')
                    <small> {{ $message }}</small>
                @enderror
                <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                <button type="submit" class="btn button bg-primary text-white mt-2"> Post </button>
            </form>
            <div class="col-md-12 mt-5">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <a href="" class="links"> <b> {{ $post->user->name }} </b> <small> {{ $post->created_at->diffForHumans() }} </small> </a>
                        <p> {{ $post->body }} </p>
                    @endforeach
                @else
                    <p> There are no posts </p>
                @endif
            </div>
            <ul class="paginate mt-5">
                {{ $posts->links() }}
            </ul>                
        </div>
    </div>
@endsection