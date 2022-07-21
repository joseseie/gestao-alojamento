<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata - Personal Category Bootstrap Responsive Web Template - Home : W3Layouts</title>
    <!-- google font -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/style-starter.css') }}">
</head>

<body>

    @include('base.header')

    {{-- Onde o conteudo sera injectado--}}
    @yield('content')

    @include('base.footer')

    @include('base.scripts')

</body>

</html>
