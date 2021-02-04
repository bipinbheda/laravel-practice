<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
        <div class="container">
            {{ $name }}
        </div>

        <div id="bipin">
            @yield('bipin')
        </div>
    </body>
</html>