<!doctype html>
<html lang="en" dir="ltr">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mx-auto text-center">
                        Tic Tac Toe
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="m-5 mx-auto text-center" border="2" width="300px" height="300px">
                        <tr>
              　　           <td>セル0</td><td>セル1</td><td>セル2</td>
                        </tr>
                        <tr>
              　　           <td>セル3</td><td>セル4</td><td>セル5</td>
                        </tr>
                        <tr>
              　　           <td>セル6</td><td>セル7</td><td>セル8</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
