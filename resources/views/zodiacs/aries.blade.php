@extends('layouts/app')
@section('content')

<a href="{{route('zodiac_main')}}"> Back </a>
<div class="margin3_5">
    <h1> {{$zodName}} </h1>
    <h3>Happiest month for Aries is: <span style="color:green;">{{$bestMonth}}</span></h3>
    @foreach($months as $value)
    <h4>{{array_shift($monthNames)}}
        <h4>
            <ul class="days">
                @foreach($value as $val)
                <li style="background: {{$colors[$val->aries_score]}}"><a href="{{route('zodiac_text', [$val->date, $zodName, $val->aries_score])}}" target="_blank">{{$val->date}} Score: {{$val->aries_score}}</a></li>
                @endforeach
            </ul>
            @endforeach
</div>
@endsection
