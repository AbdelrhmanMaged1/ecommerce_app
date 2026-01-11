<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vercel Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: { extend: { colors: { card: '#0f172a', accent: '#2dd4bf' } } }
        }
    </script>
    <style>body { background-color: #020617; color: white; }</style>
</head>
<body class="p-8 max-w-6xl mx-auto">
    <nav class="flex justify-between mb-8 border-b border-gray-800 pb-4">
        <a href="/" class="text-2xl font-bold text-accent">NeonShop</a>
        <a href="/cart" class="text-gray-300 hover:text-white">Cart ({{ count((array) session('cart')) }})</a>
    </nav>
    @if(session('success'))
        <div class="p-4 mb-4 bg-green-900/50 text-green-300 rounded">{{ session('success') }}</div>
    @endif
    @yield('content')
</body>
</html>