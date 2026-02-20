<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventarsystem</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @endif
</head>

<body class="bg-gray-200 p-4">

<h1 class="text-lg sm:text-xl md:text-2xl font-bold text-gray-800">
    Inventarsystem
</h1>

<p class="mt-2 text-sm sm:text-base md:text-lg text-gray-700">
    Diese Seite zeigt kurz ein Inventarsystem. Man kann Bestände und Geräte verwalten.
</p>

<img src="/inventory.png" alt="Inventarsystem"
     class="mt-4 w-full max-w-md border">

<h2 class="mt-6 text-base sm:text-lg md:text-xl font-semibold text-gray-800">
    Funktionen
</h2>

<ul class="mt-2 list-disc pl-6 text-sm sm:text-base md:text-lg text-gray-700">
    <li>Echtzeit-Übersicht über Bestände</li>
    <li>Barcode und QR-Code Scanning</li>
    <li>Geräte und Assets verwalten</li>
    <li>Berichte / Inventurlisten</li>
    <li>Benutzerrollen</li>
</ul>

<p class="mt-6 text-xs sm:text-sm text-gray-600">
</p>

</body>
</html>
