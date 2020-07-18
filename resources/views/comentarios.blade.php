@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{ asset($post->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Título: {{ $post->title }}</h5>
                    <h6 class ="card-subtitle mb-2 text-muted">{{ $post->created_at }}</h6>
                    <p class="card-text">Resultado: {{ $post->content }}</p>
                 
                    <a href="{{ action('PostController@index') }}" class="card-link">Todas las publicaciones</a>
                    <p><br></p>
                    <p><br></p>
                    <p><br></p>
                    <p><br></p>

                
                        <div class="form_row">
                        <label>Nombre (* obligatorio)</label><br />
                        <input type="text" name="name" />
                        </div>

                        <div class="form_row">
                        <label>Email (* obligatorio)</label><br />
                        <input type="text" name="email" />
                        </div>

                        <div class="form_row">
                        <label>Comentario</label><br />
                        <textarea name="comment" rows="" cols=""></textarea>
                        </div>

                        <input type="submit" name="Enviar" value="Enviar" class="submit_btn" />
                        </form>
                        
                    
                </div>
                <h1>Comentarios de la comunidad:</h1>
                <p>AndreD nos escribe:</p>
                <textarea name="comentarios" rows="2" cols="20">Buen artículo, me será de gran ayuda</textarea>
                <p>Persona2020 nos escribe:</p>

                <textarea name="comentarios" rows="2" cols="40">Página amarillista</textarea>
                
          
            </div>
        
        </div>
      
    </div>
 
</div>





@endsection