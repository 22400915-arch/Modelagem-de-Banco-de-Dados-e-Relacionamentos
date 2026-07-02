<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Álbum</title>
</head>
<body>
    <h1>➕ Cadastrar Álbum</h1>
    <a href="{{ route('albums.index') }}">← Voltar</a>

    @if($errors->any())
        <ul style="color:red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('albums.store') }}" method="POST">
        @csrf
        <div>
            <label>Título: <input type="text" name="title" value="{{ old('title') }}" required></label>
        </div>
        <div>
            <label>Ano: <input type="number" name="year" value="{{ old('year') }}" min="1900" max="2099"></label>
        </div>
        <div>
            <label>Artista:
                <select name="artist_id" required>
                    <option value="">-- Selecione um artista --</option>
                    @foreach($artists as $artist)
                        <option value="{{ $artist->id }}" {{ old('artist_id') == $artist->id ? 'selected' : '' }}>
                            {{ $artist->name }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
