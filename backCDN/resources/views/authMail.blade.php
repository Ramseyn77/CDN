<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <style>
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    </style>
</head>
<body>
    <section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
        <header>
            <a href="http://localhost:3000">
                <img class="w-auto h-7 sm:h-8" src="{{ asset('logo.jpeg') }}" alt="">
            </a>
        </header>
    
        <main class="mt-8">
            <h2 class="text-gray-700 dark:text-gray-200">Salut {{$user->nom.' '. $user->prenom}},</h2>
    
            <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
                Ceci est votre code de vérification:
            </p>
    
            <div class="flex items-center mt-4 gap-x-4">
                @foreach (str_split($code) as $item)                   
                    <p class="flex items-center justify-center w-10 h-10 text-2xl font-medium text-blue-500 border border-blue-500 rounded-md dark:border-blue-400 dark:text-blue-400 ">{{ $item }}</p>
                @endforeach
            </div>
        
            <p class="mt-8 text-gray-600 dark:text-gray-300">
                Merci, <br>
                Groupe CDN 
            </p>
        </main>
</body>
</html>