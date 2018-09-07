<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - CoreUI Example</title>

        <base href="{{ url('/') }}" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>
            window.Laravel = {!! json_encode([
			'csrfToken' => csrf_token(),
		]) !!};
        </script>
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

    <div id="app"></div>
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
