<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lara Mini App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

    @if (session('status'))
        <div>{{ session('status') }} </div>
    @endif
    
    {{ $slot }}


</body>
</html>