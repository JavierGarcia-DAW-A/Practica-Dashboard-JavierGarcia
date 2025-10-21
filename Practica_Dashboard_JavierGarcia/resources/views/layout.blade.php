<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Javier García</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="bg-gray-100 flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-700 text-white flex flex-col">
        <div class="p-4 text-2xl font-semibold text-center border-b border-blue-500">
            Panel Javier García
        </div>
        <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-600">Dashboard</a>
            <h3 class="text-sm uppercase mt-4 mb-2 text-blue-200">Interface</h3>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-600">Components</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-600">Utilities</a>
            <h3 class="text-sm uppercase mt-4 mb-2 text-blue-200">Addons</h3>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-600">Pages</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-600">Charts</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-600">Tables</a>
        </nav>
        <div class="p-4 bg-blue-800 text-center text-sm">
            Proyecto de ejemplo con TailwindCSS<br>
            <button class="mt-2 bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
                Más información
            </button>
        </div>
    </aside>

    <!-- Main content -->
    <div class="flex-1 flex flex-col">

        <!-- Topbar -->
        <header class="bg-white shadow flex items-center justify-between px-6 py-3">
            <div class="flex items-center space-x-2 w-1/3">
                <input type="text" placeholder="Buscar..." class="w-full border rounded px-3 py-2 text-sm focus:outline-none focus:ring focus:ring-blue-300">
                <button class="bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700">
                    🔍
                </button>
            </div>
            <div class="flex items-center space-x-4">
                <span class="relative text-gray-600 cursor-pointer">🔔<span class="absolute -top-1 -right-2 bg-red-500 text-white text-xs px-1 rounded-full">3</span></span>
                <span class="relative text-gray-600 cursor-pointer">✉️<span class="absolute -top-1 -right-2 bg-red-500 text-white text-xs px-1 rounded-full">7</span></span>
                <span class="text-gray-700 font-semibold">Javier García</span>
                <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
            </div>
        </header>

        <!-- Content area -->
        <main class="flex-1 p-6">
            <!-- Aquí irá tu contenido -->
            {{ content }}
        </main>
    </div>
</body>
</html>
