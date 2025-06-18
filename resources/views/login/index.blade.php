<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aquafin login pagina</title>
    <script src='https://cdn.tailwindcss.com'></script>
</head>
<body class="bg-white min-h-screen flex flex-col">

    @if(Auth::check())
        <script>window.location = '/startpagina';</script>
    @endif

    <header class="bg-indigo-900 h-16 flex items-center justify-start shadow-md gap-6">
        <img src="{{ asset('images/aquafin.png') }}" alt="Aquafin" class="h-8">
    </header>

    <main class="flex flex-col items-center justify-center flex-grow py-10 px-4">
        <img src="{{ asset('images/aquafin.png') }}" alt="Aquafin" class="w-80 mb-8">

         <form method="POST" action="{{ route('login.attempt') }}" class="bg-gray-100 p-6 rounded-xl shadow-md w-full max-w-2xl space-y-4">
        @csrf
        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-2">
                {{ $errors->first('login') ?? $errors->first('email') }}
            </div>
        @endif
            <div>
                <label for="login" class="block text-sm font-medium text-gray-700">Gebruikersnaam of email</label>
                <input type="text" id="login" name="login" required value="{{ old('login') }}"
                        class="mt-1 w-full p-2 rounded bg-blue-100 border border-gray-300">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord</label>
                <input type="password" id="password" name="password" required 
                        class="mt-1 w-full p-2 rounded bg-blue-100 border border-gray-300">            
                </div>

            <button type="submit" 
                    class="w-full py-2 bg-indigo-900 text-white font-semibold rounded-md hover:bg-indigo-800 transition">
                login
            </button>
        </form>
    </main>

        <footer class="bg-gray-900 h-6"></footer>
    </body>
</html>