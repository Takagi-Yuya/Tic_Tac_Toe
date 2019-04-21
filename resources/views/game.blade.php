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
                <div class="col-md-12">
                    <form action="{{ action("TTTController@check") }}" method="get">
                        <table class="m-5 mx-auto text-center" border="2" width="300px" height="300px">
                            <tr>
                                <td class="tb_mas">
                                    @if ($mas0 == 1)
                                        ◯
                                        <input type="hidden" name="m_0" value="{{ $mas0 }}">
                                    @elseif ($mas0 == -1)
                                        ×
                                        <input type="hidden" name="m_0" value="{{ $mas0 }}">
                                    @else
                                        <select name="m_0">
                                            <option value=0>-</option>
                                            <option value=1>○</option>
                                            <option value=-1>×</option>
                                        </select>
                                    @endif
                                </td>
                                <td class="tb_mas">
                                    @if ($mas1 == 1)
                                        ◯
                                        <input type="hidden" name="m_1" value="{{ $mas1 }}">
                                    @elseif ($mas0 == -1)
                                        ×
                                        <input type="hidden" name="m_1" value="{{ $mas1 }}">
                                    @else
                                        <select name="m_1">
                                            <option value=0>-</option>
                                            <option value=1>○</option>
                                            <option value=-1>×</option>
                                        </select>
                                    @endif
                                </td>
                                <td class="tb_mas">
                                    @if ($mas2 == 1)
                                        ◯
                                        <input type="hidden" name="m_2" value="{{ $mas2 }}">
                                    @elseif ($mas2 == -1)
                                        ×
                                        <input type="hidden" name="m_2" value="{{ $mas2 }}">
                                    @else
                                        <select name="m_2">
                                            <option value=0>-</option>
                                            <option value=1>○</option>
                                            <option value=-1>×</option>
                                        </select>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="tb_mas">
                                    @if ($mas3 == 1)
                                        ◯
                                        <input type="hidden" name="m_3" value="{{ $mas3 }}">
                                    @elseif ($mas3 == -1)
                                        ×
                                        <input type="hidden" name="m_3" value="{{ $mas3 }}">
                                    @else
                                        <select name="m_3">
                                            <option value=0>-</option>
                                            <option value=1>○</option>
                                            <option value=-1>×</option>
                                        </select>
                                    @endif
                                </td>
                                <td class="tb_mas">
                                    @if ($mas4 == 1)
                                        ◯
                                        <input type="hidden" name="m_4" value="{{ $mas4 }}">
                                    @elseif ($mas4 == -1)
                                        ×
                                        <input type="hidden" name="m_4" value="{{ $mas4 }}">
                                    @else
                                        <select name="m_4">
                                            <option value=0>-</option>
                                            <option value=1>○</option>
                                            <option value=-1>×</option>
                                        </select>
                                    @endif
                                </td>
                                <td class="tb_mas">
                                    @if ($mas5 == 1)
                                        ◯
                                        <input type="hidden" name="m_5" value="{{ $mas5 }}">
                                    @elseif ($mas5 == -1)
                                        ×
                                        <input type="hidden" name="m_5" value="{{ $mas5 }}">
                                    @else
                                        <select name="m_5">
                                            <option value=0>-</option>
                                            <option value=1>○</option>
                                            <option value=-1>×</option>
                                        </select>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="tb_mas">
                                    @if ($mas6 == 1)
                                        ◯
                                        <input type="hidden" name="m_6" value="{{ $mas6 }}">
                                    @elseif ($mas6 == -1)
                                        ×
                                        <input type="hidden" name="m_6" value="{{ $mas6 }}">
                                    @else
                                        <select name="m_6">
                                            <option value=0>-</option>
                                            <option value=1>○</option>
                                            <option value=-1>×</option>
                                        </select>
                                    @endif
                                </td>
                                <td class="tb_mas">
                                    @if ($mas7 == 1)
                                        ◯
                                        <input type="hidden" name="m_7" value="{{ $mas7 }}">
                                    @elseif ($mas7 == -1)
                                        ×
                                        <input type="hidden" name="m_7" value="{{ $mas7 }}">
                                    @else
                                        <select name="m_7">
                                            <option value=0>-</option>
                                            <option value=1>○</option>
                                            <option value=-1>×</option>
                                        </select>
                                    @endif
                                </td>
                                <td class="tb_mas">
                                    @if ($mas8 == 1)
                                        ◯
                                        <input type="hidden" name="m_8" value="{{ $mas8 }}">
                                    @elseif ($mas8 == -1)
                                        ×
                                        <input type="hidden" name="m_8" value="{{ $mas8 }}">
                                    @else
                                        <select name="m_8">
                                            <option value=0>-</option>
                                            <option value=1>○</option>
                                            <option value=-1>×</option>
                                        </select>
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <div class="col-md-12 text-center">
                            <input class="btn btn-primary pr-5 pl-5" type="submit" value="NEXT→">
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12 p-5 link text-center">
                          <a href="{{ action('TTTController@reset') }}">RESET</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
