<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>Laravel</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="mx-auto mt-10 max-w-2xl bg-gray-600 text-slate-700">
    {{ $slot }}
</body>

</html>
