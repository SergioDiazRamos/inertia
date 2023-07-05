<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1">

  <title inertia>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect"
    href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=nunito:200,300,400,500,600,700,800&display=swap"
    rel="stylesheet" />

  <!-- Scripts -->
  @routes
  @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
  @inertiaHead
</head>

<body class="font-sans antialiased">
  <div class="absolute inset-0 bg-gradient-to-br from-gray-950 to-gray-800"></div>
  @inertia
</body>

</html>