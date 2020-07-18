@extends('layouts.app')

@section('content')
<div class="container">
    @foreach( $publicaciones as $post)
    <div class ="row mb-4 justify-content-md-center">
        <div class ="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ action('PostController@show', $post->id) }}">{{ $post->title }}</a>
                    </h5>
                </div>
                <img src="{{ Storage::url($post->image) }}" class="card-img-top" alt="...">
            </div>
        </div>
            <div class="container" style="text-align: center;">
 
            <form method="POST" action="{{ url("posts/{$post->id}") }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn" style="background-color:white;color:black;width:150px; height:40px;margin-top:5px;">Borrar</button>
            </form>
            </div>  
    </div>
    @endforeach
    <p>Numero de elementos en esta página: {{ $publicaciones->count() }}</p>
    {{ $publicaciones->links() }}
</div>
@endsection