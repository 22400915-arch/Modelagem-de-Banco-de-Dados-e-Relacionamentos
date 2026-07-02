<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Artistas</title>
</head>
<body>
    <h1>🎤 Artistas</h1>
    <a href="{{ route('artists.create') }}">➕ Novo Artista</a> |
    <a href="{{ route('home') }}">🏠 Início</a>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Gênero</th>
            </tr>
        </thead>
        <tbody>
            @forelse($artists as $artist)
                <tr>
                    <td>{{ $artist->id }}</td>
                    <td>{{ $artist->name }}</td>
                    <td>{{ $artist->genre ?? '—' }}</td>
                </tr>
            @empty
                <tr><td colspan="3">Nenhum artista cadastrado.</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
