/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 2018/11/8
 * Time: 下午 09:05
 */
<html>
    <head>
    <title>@yield('title') | My Blog</title>
    </head>>
    <body>
        @include('layouts.partials.navigation')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
