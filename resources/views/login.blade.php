@extends('layouts.app')

@section('content')
    <div class="min-vh-100 d-flex justify-content-center 
    align-items-center">

        <form action="/signin" method="POST" style="width:400px">
        
            @csrf

            <h1>Login</h1>
            <input class="form-control mb-3 mt-4" name="email" type="email"
            placeholder="E-mail">

            <input class="form-control mb-3" name="password" type="password"
            placeholder="Senha">

            <button class="btn btn-outline-primary w-100" type="submit">Enviar</button>

            <a href="/register" class="link-secondary w-100 text-center">Cadastro</a>

        </form>

    </div>
@endsection