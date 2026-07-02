<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Artista</title>
</head>
<body>
    <h1>➕ Cadastrar Artista</h1>
    <a href="{{ route('artists.index') }}">← Voltar</a>

    @if($errors->any())
        <ul style="color:red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('artists.store') }}" method="POST">
        @csrf
        <div>
            <label>Nome: <input type="text" name="name" value="{{ old('name') }}" required></label>
        </div>
        <div>
            <label>Gênero: <input type="text" name="genre" value="{{ old('genre') }}"></label>
        </div>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
