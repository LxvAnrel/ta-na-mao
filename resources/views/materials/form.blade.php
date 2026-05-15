{{-- Comando que chama a tela layout --}}
@extends('layout')

{{-- Comando que indica em qual yield as tags vão ocupar os espaços --}}
@section('container')
<div class="container">
    <div class="row justify-content-center min-vh-100 align-items-center">
      <div class="col-md-7 col-lg-6">

        <div class="card shadow-sm">
          <div class="card-body p-4">

            <div class="card-header bg-primary">
                <h3 class="mt-2 fw-bold text-white ">Cadastrar Material</h3>    
            </div>

            {{-- Exibe a div de erros caso existam --}}
            @if($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form action="" method="post" enctype="multipart/form-data">
              @csrf()
                
              {{-- Campo: Nome do Material --}}
              <div class="mb-3">
                <label for="name" class="form-label">Nome do Material</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Apostila de Cálculo I" required>
              </div>

              {{-- Campo: Descrição --}}
              <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="description" rows="3" placeholder="Breve resumo sobre o conteúdo..." required></textarea>
              </div>

              {{-- Campo: Arquivo --}}
              <div class="mb-4">
                <label for="arquivo" class="form-label">Arquivo (PDF, ZIP, DOCX)</label>
                <input class="form-control" type="file" id="arquivo" name="file_url">
                <div class="form-text">Tamanho máximo permitido: 10MB.</div>
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">
                  <i class="bi bi-cloud-upload"></i> Compartilhar Material
                </button>
                {{-- <a href="/materiais" class="btn btn-outline-secondary">
                  Cancelar
                </a> --}}
              </div>

            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection