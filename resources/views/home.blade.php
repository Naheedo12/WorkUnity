<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WorkUnity - Employees</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white" style="background-color: #F7E1D7;">
    <header class="shadow-md" style="background-color: #4A5759;">
        <div class="max-w-7xl mx-auto px-6 py-6">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white">WorkUnity</h1>
                <a href="{{ route('Ajouter') }}"
                    class="px-6 py-3 rounded-lg font-semibold text-white transition duration-300 hover:shadow-lg"
                    style="background-color: #EDAFB8;">
                    + Add Employee
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-12">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-6" style="color: #4A5759;">List of Employees</h2>
        </div>

        <div class="overflow-x-auto rounded-lg shadow-md" style="background-color: #DEDBD2;">
            <table class="w-full">
                <thead style="background-color: #B0C4B1;">
                    <tr>
                        <th class="px-6 py-4 text-left font-semibold text-white">First Name</th>
                        <th class="px-6 py-4 text-left font-semibold text-white">Last Name</th>
                        <th class="px-6 py-4 text-left font-semibold text-white">Email</th>
                        <th class="px-6 py-4 text-left font-semibold text-white">Position</th>
                        <th class="px-6 py-4 text-left font-semibold text-white">Actions</th>
                    </tr>
                </thead>
                @foreach ($employees as $employee)
                    <tr class="border-b-2" style="border-color: #F7E1D7; background-color: white;">
                        <td class="px-6 py-4 font-semibold" style="color: #4A5759;">{{ $employee->prenom }}</td>
                        <td class="px-6 py-4 font-semibold" style="color: #4A5759;">{{ $employee->nom }}</td>
                        <td class="px-6 py-4" style="color: #4A5759;">{{ $employee->email }}</td>
                        <td class="px-6 py-4" style="color: #4A5759;">{{ $employee->poste }}</td>
                        <td class="px-6 py-4 flex gap-3">
                            <a href="{{ route('Details', $employee->id) }}"
                                class="px-4 py-2 rounded-lg text-white font-semibold transition duration-300 hover:shadow-md"
                                style="background-color: #B0C4B1;">View</a>
                            <a href="{{ route('Modifier', $employee->id) }}"
                                class="px-4 py-2 rounded-lg text-white font-semibold transition duration-300 hover:shadow-md"
                                style="background-color: #EDAFB8;">Edit</a>
                            <a href="{{ route('Supprimer', $employee->id) }}"
                                class="px-4 py-2 rounded-lg text-white font-semibold transition duration-300 hover:shadow-md"
                                style="background-color: #4A5759;">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>

</body>

</html>
