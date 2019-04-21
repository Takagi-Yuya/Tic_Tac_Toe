@extends('layout.base')

@section('content')
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
                        @elseif ($mas1 == -1)
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
            <div class="col-md-12 p-5 text-center">
              <a class="link" href="{{ action('TTTController@reset') }}">RESET</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 p-5">
                <p class="howto text-center">How to...</p>
                <div class="explain col-md-8 mx-auto">
                    <p>⓪ タテ・ヨコ・ナナメ いずれかを◯か×で揃えれば勝ち。</p>
                    <br>
                    <p>① はじめに先行か後攻、◯か×を決める。</p>
                    <br>
                    <p>② <select><select> 決まった順番に◯か×を選択。</p>
                    <br>
                    <p>③ ◯か×の選択後、<input class="btn btn-primary" value="NEXT→"> を押す。</p>
                    <br>
                    <p>④ 次の人に交代して、②③の繰り返し。</p>
                    <br>
                    <p>⑤ 勝敗が決まると画面に表示される。</p>
                    <br>
                    <p>⑥ <a class="link" href="#">RESET</a> を押すと盤面がクリアされます。</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
