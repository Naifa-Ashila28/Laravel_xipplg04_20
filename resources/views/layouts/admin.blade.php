<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | iLuxury Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-900 via-purple-900 to-indigo-900 text-white min-h-screen">

    <!-- Navbar -->
    <nav class="bg-black bg-opacity-40 backdrop-blur-md px-8 py-4 flex justify-between items-center shadow-lg">
        <h1 class="text-2xl font-bold text-blue-400">iLuxury Admin</h1>
        <ul class="flex space-x-6">
            <li><a href="/admin/dashboard" class="hover:text-blue-400">Dashboard</a></li>
            <li><a href="/admin/products" class="hover:text-blue-400">Products</a></li>
            <li><a href="/admin/users" class="hover:text-blue-400">Users</a></li>
            <li><a href="/admin/logout" class="hover:text-red-400">Logout</a></li>
        </ul>
    </nav>

    <!-- Konten Halaman -->
    <main class="p-10">
        @yield('content')
    </main>

</body>
</html>
