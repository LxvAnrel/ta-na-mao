@extends('layout')

@section('container')
	<div class="container py-4">
		<div class="card shadow-sm">
			<div class="card-header bg-primary d-flex align-items-center gap-2">
				<i class="bi bi-journal-text text-white fs-4"></i>
				<h3 class="mt-2 fw-bold text-white mb-0">Materiais</h3>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
                            <th>#</th>
							<th>Nome</th>
							<th>Link</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
                        @foreach ($materials as $material)
                        <tr>
                            <td>{{ $material->id }}</td>
                            <td>{{ $material->name }}</td>
                            <td>
                                <a href="{{ $material->file_url }}" target="_blank">Baixar</a>
                            </td>
                            <td>
                                <button>Editar</button>
                                <button>Excluir</button>
                            </td>
                        </tr>
                        @endforeach
					</tbody>
				</table>
				<div id="materials-content">
					<!-- TODO: completar aqui -->
				</div>
			</div>
		</div>
	</div>
@endsection