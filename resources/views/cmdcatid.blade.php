@extends('layouts.app')
@section('content')

<ul>
    @foreach($commands as $command)
    <li>
    <details>
        <summary>{{$command->command }}</summary>
        <p>{{$command->description}}</p>
        <button><a href="{{route('cmdcatdelnote', $command->id)}}">Delete</a></button>
    </details>
    </li>
    @endforeach
</ul>
@endsection