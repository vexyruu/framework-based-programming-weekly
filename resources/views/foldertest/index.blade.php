<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is Folder Index</title>
</head>
<body>
    <h1>laravel framework test</h1>
    <p>{{$greeting}}</p>
    <ul>
        <li>
            <a href="/test/{{$friend[0]["id"]}}">
                {{$friend[0]["name"]}}
            </a>
        </li>
        <li>
            <a href="/test/{{$friend[1]["id"]}}">
                {{$friend[1]["name"]}}
            </a>
        </li>
    </ul>
    
</body>
</html>