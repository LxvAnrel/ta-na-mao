<h1 style="coler:blue">Inicial</h1>
<h2>{{$nome}}</h2>
<form action="" method="post">
    {{-- Proteje o site con ataque XSS, que gera um tolken para evitar ataques --}}
    @csrf()
    <label for="">Nome</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>