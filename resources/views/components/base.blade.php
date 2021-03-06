<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href={{$css}}>

    <title>{{ $title }}</title>
</head>

<body>
    <x-header />

    {{ $slot }}

    <x-footer />
</body>

</html>
