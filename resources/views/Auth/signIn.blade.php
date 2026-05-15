{{-- Comando que chama a tela leuout --}}
@extends('layout')

{{-- Comando que indica em qual yould as tags vão ocupar os espaços --}}
@section('container')
<div class="container">
    <div class="row justify-content-center min-vh-100 align-items-center">
      <div class="col-md-6 col-lg-5">

        <div class="card shadow-sm">
          <div class="card-body p-4">
            <h3 class="text-center mb-4">Criar Conta</h3>
            
            {{-- Exibe a div, caso exista erros, todos os erros são listados na tela do laço --}}
            @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form action="/sign-in" method="post">
              @csrf()
              
              <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="password" required>
              </div>

              <div class="mb-3">
                <label for="repetirSenha" class="form-label">Repetir Senha</label>
                <input type="password" class="form-control" id="repetirSenha" name="password_confirmation" required>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                  Criar Conta
                </button>
              </div>

            </form>

            <div class="text-center mt-3">
              <small>
                Já possui conta? <a href="#">Entrar</a>
              </small>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection