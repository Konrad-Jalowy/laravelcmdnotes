@extends('layouts.app')
@section('content')

<div class="container">
    @foreach($commands as $command)

    <details>
        <summary> <code>{{$command->command }}</code></summary>
        <p>{{$command->description}}</p>
        <a href="{{route('cmdcatdelnote', $command->id)}}" class="btn btn-primary">Delete</a>
        <a href="{{route('cmdcatupdatenote', $command->id)}}" class="btn btn-primary">Update</a>
    </details>

    @endforeach
</div>
@endsection