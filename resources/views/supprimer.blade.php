<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employee - WorkUnity</title>
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
        <div class="rounded-lg shadow-lg p-8 bg-white text-center">

            <form method="POST" action="{{ route('Supprimer', $employee->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="px-6 py-3 rounded-lg font-semibold text-white bg-[#4A5759] hover:shadow-lg transition">
                    Delete Employee
                </button>
            </form>

        </div>
    </main>

</body>

</html>
