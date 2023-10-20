<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        @vite(["resources/css/app.css", "resources/js/app.js", "resources/sass/app.scss"])
    </head>
    <body class="antialiased">
       <div id="app">
            <div class="content">
                <main-component></main-component>
                <hobbies-component v-if="$route.path === '/'" class="content1"></hobbies-component>

            </div>

       </div>
    </body>
</html>
