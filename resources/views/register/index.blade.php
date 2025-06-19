<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aquafin registreer pagina</title>
    <script src='https://cdn.tailwindcss.com'></script>
</head>
<body class="bg-white min-h-screen flex flex-col">

    <!-- De balkje van boven -->
    <header class="bg-indigo-900 h-14 flex items-center px-6 shadow-md">
        <img src="{{ asset('images/aquafin.png') }}" alt="Aquafin" class="h-8">
        <span class="text-white ml-4 font-medium">Aquafin</span>    
    </header>

    <!-- Inhoud van de pagina -->
    <main class="flex flex-col items-center justify-center flex-grow py-10 px-4">
        <!-- Groot logo -->
        <img src="{{ asset('images/aquafin.png') }}" alt="Aquafin" class="w-60 mb-8">

        <!-- Formulier -->
        <form method="POST" action="#" class="bg-gray-100 p-6 rounded-2xl shadow-md w-full max-w-2xl space-y-5">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">email</label>
                <input type="email" id="email" name="email" required 
                       class="mt-1 w-full p-2 rounded bg-blue-100 border border-gray-300">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">password</label>
                <input type="password" id="email" name="password" required 
                       class="mt-1 w-full p-2 rounded bg-blue-100 border border-gray-300">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Verifieer je wachtwoord</label>
                <input type="password" id="password" name="password_confirmation" required 
                       class="mt-1 w-full p-2 rounded bg-blue-100 border border-gray-300">            
            </div>

            <button type="submit" 
                    class="w-full py-2 bg-indigo-900 text-white font-semibold rounded-md hover:bg-indigo-800 transition">
                Registreer
            </button>
        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 h-6 w-full"></footer>
    
</body>
</html>