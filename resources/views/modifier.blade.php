<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Employee - WorkUnity</title>
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
            <h2 class="text-3xl font-bold mb-8 text-[#4A5759]">Edit Employee</h2>

            <form method="POST" action="{{ route('employees.update', $employee->id) }}" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-semibold mb-1 text-[#4A5759]">First Name</label>
                    <input type="text" name="prenom" value="{{ old('prenom', $employee->prenom) }}"
                        class="w-full px-4 py-2 rounded border border-gray-300" />
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1 text-[#4A5759]">Last Name</label>
                    <input type="text" name="nom" value="{{ old('nom', $employee->nom) }}"
                        class="w-full px-4 py-2 rounded border border-gray-300" />
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1 text-[#4A5759]">Email</label>
                    <input type="email" name="email" value="{{ old('email', $employee->email) }}"
                        class="w-full px-4 py-2 rounded border border-gray-300" />
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1 text-[#4A5759]">Position</label>
                    <input type="text" name="poste" value="{{ old('poste', $employee->poste) }}"
                        class="w-full px-4 py-2 rounded border border-gray-300" />
                </div>

                <div class="flex gap-4 mt-4">
                    <button type="submit" class="px-4 py-2 bg-[#B0C4B1] text-white rounded">Save Changes</button>
                    <a href="{{ route('Home') }}" class="px-4 py-2 bg-gray-200 text-[#4A5759] rounded">Cancel</a>
                </div>
            </form>
        </div>
    </main>

</body>

</html>
