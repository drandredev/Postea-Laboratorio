@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <img src="{{ Storage::url($post->image)}}" class="card-img-top" STYLE="width: 70%" alt="...">

                    <div class="card-body">
                        <h3 class="card-title">{{$post->title}}</h3>
                        <h6 class="card-subtitle mb-2 text-muted">{{$post->created_at->toFormattedDateString()}}</h6>
                        <p class="card-text">{{$post->content}}</p>
                        <a href="{{action('PostController@index')}}" class="card-link">
                            Todas las publicaciones
                        </a>

                        @auth
                            <form action="{{action('CommentController@store',['post_id'=>$post->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-sm-2 col-form-label" for="content">{{__('Comment')}}</label>

                                    <div class="col-sm-12">
                                        <textarea class="form-control @error('content') is-invalid @enderror"
                                                  id="content" name="content" rows="3">{{old('content')}}</textarea>

                                        @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-dark">{{__('Crear')}}</button>
                                    </div>
                                </div>
                            </form>
                        @endauth

                        @guest
                            <p>Si deseas comentar tienes que 
                                <a href="{{action('Auth\LoginController@showLoginForm')}}">Iniciar Sesión</a> o
                                <a href="{{action('Auth\RegisterController@showRegistrationForm')}}">Registrarte</a>
                            </p>
                        @endguest

                        @forelse ($post->comments as $comment)
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{$comment->user->name}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{$comment->created_at->toFormattedDateString()}}</h6>
                                    <p class="card-text">{{$comment->content}}</p>
                                </div>
                            </div>
                        @empty
                            <p>No hay comentarios para esta publicación, sé el primero</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





