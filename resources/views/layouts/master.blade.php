<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyApp | Share Social Links</title>
    <!-- CSS only -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   
</head>
<body>
      @yield('content')
        <script src="http://code.jquery.com/jquery-3.4.1.js"></script>        
    @stack('scripts')
</body>
</html>