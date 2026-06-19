@props(['title' => 'ShebaTech', 'description' => 'ShebaTech — End-to-end IT solutions including online & on-site support, CCTV installation, hardware & networking, and complete business IT services.'])
<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description }}">
    <title>{{ $title }} — IT Solutions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-900 font-sans">

    <x-nav />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>
