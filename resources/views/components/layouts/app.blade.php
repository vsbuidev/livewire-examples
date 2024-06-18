<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ $title ?? 'Page Title' }}</title>
    <!-- <style>
        html,
        body {
            touch-action: manipulation;
            overflow: hidden;
        }
    </style> -->
</head>

<body>
    <nav>
        <a href="/" @class(['current'=> request()->is('/')]) >Todos</a>
        <a href="/counter" @class(['current'=> request()->is('counter')])>Counter</a>
        <a href="/show-posts" @class(['current'=> request()->is('show-posts')])>ShowPosts</a>
    </nav>
    {{ $slot }}
    <!-- <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceworker.js')
                .then(function(registration) {
                    console.log('Service Worker registered with scope:', registration.scope);
                })
                .catch(function(error) {
                    console.log('Service Worker registration failed:', error);
                });
        }

        document.addEventListener('keydown', function(event) {
            if ((event.ctrlKey || event.metaKey) && (event.key === '+' || event.key === '-' || event.key === '0')) {
                event.preventDefault();
            }
        });

        document.addEventListener('wheel', function(event) {
            if (event.ctrlKey || event.metaKey) {
                event.preventDefault();
            }
        }, {
            passive: false
        });

        document.addEventListener('gesturestart', function(event) {
            event.preventDefault();
        });
        document.addEventListener('gesturechange', function(event) {
            event.preventDefault();
        });
        document.addEventListener('gestureend', function(event) {
            event.preventDefault();
        });
    </script> -->
</body>

</html>