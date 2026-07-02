<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Álbuns</title>
</head>
<body>
    <h1>💿 Álbuns</h1>
    <a href="{{ route('albums.create') }}">➕ Novo Álbum</a> |
    <a href="{{ route('home') }}">🏠 Início</a>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Ano</th>
                <th>Artista</th>
            </tr>
        </thead>
        <tbody>
            @forelse($albums as $album)
                <tr>
                    <td>{{ $album->id }}</td>
                    <td>{{ $album->title }}</td>
                    <td>{{ $album->year ?? '—' }}</td>
                    <td>{{ $album->artist->name }}</td>
                </tr>
            @empty
                <tr><td colspan="4">Nenhum álbum cadastrado.</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
