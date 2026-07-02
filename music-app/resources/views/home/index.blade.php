<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Music App</title>
</head>
<body>
    <h1>🎵 Music App</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <nav>
        <ul>
            <li><a href="{{ route('artists.index') }}">🎤 Ver Artistas</a></li>
            <li><a href="{{ route('artists.create') }}">➕ Cadastrar Artista</a></li>
            <li><a href="{{ route('albums.index') }}">💿 Ver Álbuns</a></li>
            <li><a href="{{ route('albums.create') }}">➕ Cadastrar Álbum</a></li>
        </ul>
    </nav>
</body>
</html>
