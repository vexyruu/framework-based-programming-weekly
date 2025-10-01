<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friend Network</title>
    
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>Friend Network</h1>
            <a href="{{ route('foldertest.index') }}">All Friends</a>
            <a href="{{ route('foldertest.create') }}">Create New Friends</a>
        </nav>
    </header>
    <main class="container">
        {{$slot }}
    </main>
</body>
</html>