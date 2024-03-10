<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title',config('app.name','@Master Layout'))</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Css for login page -->
    @yield('css')
</head>
<body>

    @yield('main')

    @yield('js')

</body>
</html>
