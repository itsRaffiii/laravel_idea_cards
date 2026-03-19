@props ([
'title' => 'laracasts'

])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <style>
        nav > a {
            color: blue;
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