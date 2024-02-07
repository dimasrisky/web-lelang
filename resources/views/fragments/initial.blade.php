<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lelangku.id</title>
    <style>
        @font-face{
            font-family: 'Poetsen One';
            src: url('/assets/font/PoetsenOne-Regular.ttf');
        }
    </style>
    <script>
    tailwind.config = {
      theme: {
        fontFamily: {
            'inter': ['Inter', 'sans-serif'],
            'poetsen': ['Poetsen One'],
        }
      }
    }
    </script>
</head>
<body>
    @yield('content')
</body>
</html>
