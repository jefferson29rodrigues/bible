@extends('layouts.main')

@section('title', 'Bible')

@section('content')

<div>
    @foreach($events as $event)
        <p>{{ $event->title }} -- {{ $event->description }}</p>
    @endforeach
</div>

<div>
    <p>{{ $events[1]->title }}
</div>

<div>
    {{ $events }}</p>
</div>

<div>
    {{ $event }}</p>
</div> 

@endsection