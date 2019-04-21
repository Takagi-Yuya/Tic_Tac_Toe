@extends('layout.base')

@section('content')
<div class="row">
    <div class="col-md-12 p-5 link text-center">
        <a href="{{ action('TTTController@reset') }}">START</a>
    </div>
</div>
@endsection
