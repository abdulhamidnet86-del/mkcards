<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'MKCards') }}</title>
    <!-- Cairo font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="app-container">
        <header class="topbar">
            <div class="brand">MKCards</div>
            <div class="user">{{ env('APP_NAME') }} - <span class="status">متصل</span></div>
        </header>

        <main class="content">
            @yield('content')
        </main>

        <footer class="footer">© {{ date('Y') }} MKCards</footer>
    </div>
</body>
</html>
