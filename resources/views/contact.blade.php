
@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    @if($errors->any())
        {{ $errors->first('name')}}
    @endif
    
    <form method="POST" action="{{ route('contact')  }}">
        @csrf
        <input name="name" placeholder="Nombre..." value="" ><br>
        <input type="email" name="email" placeholder="Email..."><br>
        <input name="subject" placeholder="Asunto..." value="Asunto prueba"><br>
        <textarea name="content" placeholder="Mensaje...">Mensaje prueba</textarea><br>
        <button>Enviar</button>
    </form>
@endsection