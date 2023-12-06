<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <!-- Add your head content -->

    <!-- Include CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<!-- Add your body content -->

@yield('content')
</body>
</html>
