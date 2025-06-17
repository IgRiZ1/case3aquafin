<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.tailwindcss.com'></script>
    <title>Aquafin login pagina</title>
</head>

<body class="bg-white min-h-screen flex flex-col">

    @if(Auth::check())
    <script>
        window.location = '/startpagina';
    </script>
    @endif

    <header class="bg-indigo-900 h-16 flex items-center justify-start shadow-md gap-6">
        <img src="{{ asset('images/aquafin.png') }}" alt="Aquafin" class="h-8">
    </header>


</body>

</html>