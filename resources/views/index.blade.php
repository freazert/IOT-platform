<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IoT Platform</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-findcond">
            <div class="container">
                <div class="navbar-header">
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <router-link to="/Index"> Go to Index</router-link>
                        </li>
                        <li>
                             <router-link to="/Create"> Go to Create</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <router-view></router-view>

    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>