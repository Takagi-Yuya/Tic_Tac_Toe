<!doctype html>
<html lang="en" dir="ltr">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tic Tac Toe</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .title {
                font-size: 60px;
            }

            .howto {
                font-size: 45px;
            }

            .link {
                font-size: 20px;
                padding: 0em 2em;
                margin: 2em 0;
                border: solid 2px;
            }

            .explain {
                font-size: 20px;
            }

            .tb_mas {
                width: 100px;
                height: 100px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mt-5 mx-auto text-center">
                        Tic Tac Toe
                    </div>
                </div>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>
