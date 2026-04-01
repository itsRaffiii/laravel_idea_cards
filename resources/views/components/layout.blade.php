@props(['title' => 'Laravel Idea'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
   
    <style>
        .max-w-1000 {
            max-width: 00px;
            margin: auto;
        }

        .card {
            background: #e3e3e369;
            padding: 1rem;
            text-align: center;
        }
    </style>

</head>
<body>

    <nav>
        <a href="/">HomePage</a>
        <a href="/about">About Us</a>
        <a href="/contact">Contact Us</a>
    </nav>

    <main>
        {{$slot}}
    </main>

</body>
</html>