<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Details - WorkUnity</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F7E1D7]">

    <header class="shadow-md bg-[#4A5759]">
        <div class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">WorkUnity</h1>
            <a href="{{ route('Home') }}" class="text-white hover:underline font-semibold">← Back to Employees</a>
        </div>
    </header>

    <main class="max-w-2xl mx-auto px-6 py-12">
        <div class="rounded-lg shadow-lg p-8 bg-white">

            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-bold text-[#4A5759]">{{ $employee->prenom }} {{ $employee->nom }}</h2>
                <div class="flex gap-3">
                    <a href="{{ route('Modifier', $employee->id) }}"
                        class="px-4 py-2 rounded bg-[#EDAFB8] text-white font-semibold hover:shadow-md">Edit</a>
                    <a href="{{ route('Supprimer', $employee->id) }}"
                        class="px-4 py-2 rounded bg-[#4A5759] text-white font-semibold hover:shadow-md">Delete</a>
                </div>
            </div>

            <div class="space-y-4 text-[#4A5759]">
                <div>
                    <p class="text-sm font-semibold text-[#B0C4B1]">Employee ID</p>
                    <p>{{ $employee->id }}</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-[#B0C4B1]">Email</p>
                    <p>{{ $employee->email }}</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-[#B0C4B1]">Position</p>
                    <p>{{ $employee->poste }}</p>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
