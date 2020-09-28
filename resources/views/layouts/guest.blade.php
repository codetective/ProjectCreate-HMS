
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alpha HMS</title>
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <!-- Latest compiled and minified CSS -->
</head>

<body>

    <div class="container">
          {{ $slot }}
    </div>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
