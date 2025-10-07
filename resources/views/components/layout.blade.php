<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friend Network</title>
    
    @vite('resources/css/app.css')
</head>
<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var flash = document.getElementById('flash');
      
        if (flash) {
            setTimeout(function () {
            flash.remove(); 
            }, 2000);
        }
    });
  </script>
</body>
</html>