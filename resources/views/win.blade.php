@extends('layout.base')

@section('content')
<div class="row">
    <div class="col-md-12 p-5 text-center">
        <p class="win">WINNER！<br><b>{{ $result }}</b><p>
        <br>
        <a class="link" href="{{ action('TTTController@reset') }}">One More Play</a>
    </div>
</div>
@endsection
