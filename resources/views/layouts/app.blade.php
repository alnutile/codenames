<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("headers")
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <livewire:styles />
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        @include("nav")
        <main class="mdl-layout__content">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-col"></div>
                <div class="mdl-cell mdl-cell--8-col">
                    @yield('content')
                </div>
                <div class="mdl-cell mdl-cell--2-col"></div>
            </div>
        </main>
    </div>
    <livewire:scripts />
    @include("footer")
</body>

</html>