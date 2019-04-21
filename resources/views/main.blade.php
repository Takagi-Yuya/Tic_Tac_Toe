@extends('layout.base')

@section('content')
<div class="row">
    <div class="col-md-12 p-5 text-center">
        <a class="link" href="{{ action('TTTController@reset') }}">GAME START</a>
    </div>
</div>
@endsection
