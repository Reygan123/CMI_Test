<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> <!-- Pastikan menggunakan Tailwind CSS -->
</head>
<body class="bg-gray-100">
    <div class="flex">
        <aside class="w-64 bg-white min-h-screen shadow-md">
            <div class="py-6 px-8">
                <h2 class="text-2xl font-bold text-gray-800">Admin Dashboard</h2>
                <ul class="mt-6 space-y-4">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center text-gray-700 hover:text-blue-500 transition duration-200">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18m-9 9l9-9-9-9" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('articles.index') }}" class="flex items-center text-gray-700 hover:text-blue-500 transition duration-200">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 12h18M3 21h18" />
                            </svg>
                            Articles
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="flex items-center text-gray-700 hover:text-red-500 transition duration-200">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3" />
                                </svg>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </aside>
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

    @yield('scripts')
</body>
</html>
