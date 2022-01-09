@extends('layouts/app')
@section('content')
<div class="mainSelect">
    <form action="{{ route('zodiac_main') }}" method="get">
        <select name="select">
            <option value="0">Select Zodiac sign:</option>
            <option value="aquarius" name="aquarius">Aquarius</option>
            <option value="aries" name="aries">Aries</option>
            <option value="pisces" name="pisces">Pisces</option>
            <option value="taurus" name="taurus">Taurus</option>
            <option value="gemini" name="gemini">Gemini</option>
            <option value="cancer" name="cancer">Cancer</option>
            <option value="leo" name="leo">Leo</option>
            <option value="virgo" name="virgo">Virgo</option>
            <option value="scorpio" name="scorpio">Scorpio</option>
            <option value="libra" name="libra">Libra</option>
            <option value="sagittarius" name="sagittarius">Sagittarius</option>
            <option value="capricorn" name="capricorn">Capricorn</option>
        </select>
        <button type="submit" class="">Show calendar</button>
    </form>
</div>
<h3 class="margin4_3 font_size_25">The happiest year is for: {{$happiestYear}} </h3>
@endsection
