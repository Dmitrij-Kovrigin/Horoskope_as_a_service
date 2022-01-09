@extends('layouts/app')

@section('content')
<div class="margin4_3">
    <h2 style="background: {{$color}};width:33%;">This day: <b>{{$date}}</b> has a score: <b>{{$score}}</b> for <b>{{$zodName}}</b>
</div>
@endsection
