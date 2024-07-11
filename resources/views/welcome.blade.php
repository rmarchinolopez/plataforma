<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TV CLASES</title>
    @vite(['resources/js/app.js'])

    <style>
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:'Times New Roman', Times, serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>

<body>
    <div id="app"></div>
</body>

</html>
