@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach( $publicaciones as $post)
        <div id="{{ $post->id}}">
            <header>
                <a href="{{ action('PostController@userPosts', $post->id)}}">
                    <h2 class="text-dark">{{ $post->tittle}}</h2>
                </a>
            </header>
            <div class="post-content">
                <a href="{{ action('PostController@userPosts', $post->id) }}">
                    <img src="{{ Storage::url($post->image)}}" class="img-fluid" alt="imagen">
                </a>
            </div>   
        </div>
        @endforeach

    </div>
</div>
@endsection
