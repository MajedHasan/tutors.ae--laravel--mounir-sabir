<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Your page description here">
    <meta name="keywords" content="keyword1, keyword2, keyword3">

    <!-- Faveicon -->
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <title>@yield('title')</title>
    <!-- Add your CSS/JS links here -->

    <!-- Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Ant Design CSS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/antd/dist/antd.min.css">
    <!-- Daisy UI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />

    <!-- Header CSS File -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">



</head>

<body>
    <!-- Global Header -->
    @include('partials.header')

    <!-- Main Content -->
    <main class="container">
        @yield('content')
    </main>

    <!-- Global Footer -->
    @include('partials.footer')

    <!-- Header JS File -->
    <script src="{{ asset('js/header.js') }}"></script>

    <!-- Header jQuery CDN File -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Add your global scripts here -->

    <!-- Ant Design JavaScript via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/antd/dist/antd.min.js"></script>

    <!-- Daisy UI CSS -->
    <script src="https://cdn.tailwindcss.com"></script>


</body>

</html>