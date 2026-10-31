<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    @include('admin.layouts.header')
    @include('admin.layouts.nav')
    @yield('content')
    @include('admin.layouts.footer')

</body>

</html>
