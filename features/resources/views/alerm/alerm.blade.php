@extends('layouts.app')
@section('content')
<h1>Set Alarm</h1>

<form method="post" action="{{ route('alarms.store') }}">
    @csrf
    <div class="form-group">
        <label for="time">Time:</label>
        <input type="time" id="time" name="time">
    </div>
    <div class="form-group">
        <label for="tone">Tone:</label>
        <input type="text" id="tone" name="tone">
    </div>
    <button type="submit">Set Alarm</button>
</form>

<h1>Existing Alarms</h1>

@foreach($alarms as $alarm)
<div>
    <h2>{{ $alarm->time }}</h2>
    <p>{{ $alarm->tone }}</p>
    <form method="post" action="{{ route('alarms.destroy', $alarm->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Alarm</button>
    </form>
</div>
@endforeach
@endsection
