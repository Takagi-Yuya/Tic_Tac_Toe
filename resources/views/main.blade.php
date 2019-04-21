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

            .link {
                font-size: 30px;
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
                    <div class="title m-5 mx-auto text-center">
                        Tic Tac Toe
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 p-5 link text-center">
                  <a href="{{ action('TTTController@reset') }}">START</a>
                </div>
            </div>
        </div>
    </body>
</html>
