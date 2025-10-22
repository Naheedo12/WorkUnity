<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
</head>
<body>

        <h1 class="text-4xl font-bold mb-6 text-pink-600">Page Home</h1>
        <a href="{{ route('Ajouter') }}" 
           class="inline-block bg-pink-500 text-white px-6 py-3 rounded-lg shadow hover:bg-green-600 transition duration-300">
            Ajouter
        </a>

</body>
</html>
